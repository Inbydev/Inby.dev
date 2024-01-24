var texts = [
    'HTML',
    'CSS',
    'JavaScript',
    'Python',
    'PHP',
    'Astro',
    'Git',
    'SQLite',
    'Markdown',
];

var tc = TagCloud('.content', texts, {
    maxSpeed: 'fast',
    initSpeed: 'fast',
    radius: '160'
});