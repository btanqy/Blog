fetch('posts.json')
  .then(res => res.json())
  .then(posts => {
    // Sort by date descending
    posts.sort((a, b) => new Date(b.date) - new Date(a.date));

    // Render boxes
    const wrap = document.getElementById('boxHome');
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
          <h1>${post.title}</h1>
          <h3>${post.preview}</h3>
        </div>
        <div class="bottom-right">
          <h2>${post.date}</h2>
        </div>
      `;
      wrap.appendChild(div);
    });
  })
  .catch(err => console.error('Failed to load posts:', err));
