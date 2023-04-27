const container = document.querySelector('.grid-container');

fetch('https://www.news18.com/rss/latest.xml')
  .then(response => response.text())
  .then(str => new window.DOMParser().parseFromString(str, "text/xml"))
  .then(data => {
    const items = data.querySelectorAll('item');

    for (let i = 0; i < 81; i++) {
      const card = document.createElement('div');
      card.classList.add('card');

      const title = document.createElement('h2');
      title.textContent = items[i].querySelector('title').textContent;

      const link = document.createElement('a');
      link.href = items[i].querySelector('link').textContent;
      link.textContent = 'Read more';

      const description = document.createElement('p');
      description.textContent = items[i].querySelector('description').textContent;

      const image = document.createElement('img');
      const imageUrl = items[i].querySelector('enclosure')?.getAttribute('url') || '';
      image.src = imageUrl;

      card.appendChild(title);
      card.appendChild(image);
      card.appendChild(description);
      card.appendChild(link);

      container.appendChild(card);
    }
  });
