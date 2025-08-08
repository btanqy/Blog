fetch('posts.json')
  .then(res => res.json())
  .then(posts => {
    // Sort by date descending
    posts.sort((a, b) => new Date(b.date) - new Date(a.date));

    // Populate category list
    const categories = {};
    posts.forEach(post => {
      if (!categories[post.category]) categories[post.category] = new Set();
      if (post.subcategory) categories[post.category].add(post.subcategory);
    });

    const catList = document.getElementById('categoryList');
    for (const category in categories) {
  if (!category || category.trim() === '') continue; // skip empty category names

  const li = document.createElement('li');
  li.innerHTML = `
    <span class="arrow">&#9654;</span>
    <a href="javascript:void(0);" onclick="filterByCategory('${category}')">${category}</a>
    <ul class="subcategory-list" style="display:none;">
      ${[...categories[category]].map(sub => `<li><a href="javascript:void(0);" onclick="event.stopPropagation(); filterByCategory('${sub}')">${sub}</a></li>`).join('')}
    </ul>`;
  li.onclick = () => toggleSubcategories(li);
  catList.appendChild(li);
}


    // Render boxes
    const wrap = document.getElementById('boxWrap');
    posts.forEach(post => {
      const div = document.createElement('div');
      div.className = 'box';
      div.dataset.category = post.category;
      div.dataset.subcategory = post.subcategory;
      div.style.cursor = 'pointer';
      div.style.background = `linear-gradient(to bottom, rgba(0,0,0,0), rgba(0,0,0,0.8)), url('${post.thumbnail}')`;
      div.style.backgroundSize = 'cover';
      div.style.backgroundPosition = 'center';
      div.onclick = () => window.location.href = post.url;

      div.innerHTML = `
        <div class="bottom-left-box">
          <p>${post.title}</p>
          <div class="bottom-left-small-box">
            <p>${post.preview}</p>
          </div>
        </div>
        <div class="bottom-right-box">
          <p>${post.date}</p>
        </div>
      `;
      wrap.appendChild(div);
    });
  });

function filterByCategory(category) {
  document.querySelectorAll('.box').forEach(box => {
    const cat = box.dataset.category;
    const sub = box.dataset.subcategory;
    box.style.display = (cat === category || sub === category || category === 'all') ? 'block' : 'none';
  });
}

function toggleSubcategories(element) {
  const sub = element.querySelector('.subcategory-list');
  const arrow = element.querySelector('.arrow');
  const open = sub.style.display === 'block';
  sub.style.display = open ? 'none' : 'block';
  arrow.classList.toggle('down', !open);
  if (!open) {
    const category = element.querySelector('a').textContent;
    filterByCategory(category);
  } else {
    filterByCategory('all');
  }
}
