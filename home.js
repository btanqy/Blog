function parseDate(dateStr) {
  const [month, day, year] = dateStr.split('-');
  return new Date(`20${year.padStart(2, '0')}-${month.padStart(2, '0')}-${day.padStart(2, '0')}`);
}

fetch('posts.json')
  .then(res => res.json())
  .then(posts => {
    // Sort by descending parsed date
    posts.sort((a, b) => parseDate(b.date) - parseDate(a.date));

    // Render boxes
    const wrap = document.getElementById('boxHome');
    wrap.innerHTML = '';
    posts.forEach(post => {
      const div = document.createElement('div');
      div.className = 'home';
      div.style.cursor = 'pointer';
      div.style.background = `linear-gradient(to bottom, rgba(0,0,0,0), rgba(0,0,0,0.8)), url('${post.thumbnail}')`;
      div.style.backgroundSize = 'cover';
      div.style.backgroundPosition = 'center';
      div.onclick = () => window.location.href = post.url;

      div.innerHTML = `
        <div class="bottom-left">
          <p>${post.title}</p>
          <div class="bottom-left-small">
            <p>${post.preview}</p>
          </div>
          <div class="bottom-right">
            <p>${post.date}</p>
          </div>
        </div>
      `;
      wrap.appendChild(div);
    });
  })
  .catch(err => console.error('Failed to load posts:', err));
