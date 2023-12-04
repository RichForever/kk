import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

import anchorScroll from './components/anchorScroll';
import scrollToUp from './components/scrollToUp';
import { initBlock } from './blocks';

const blockNames = [
  "cta",
  "contact",
  "recent-posts",
  "info-boxes",
  "text-with-image",
  "faq",
  "page-title",
  "hero",
  "text-with-image-gallery",
  "text-with-list"
];

for (const item of blockNames) {
  initBlock(item).then((blocks) => {});
}

window.addEventListener('DOMContentLoaded', () => {
  anchorScroll()
  scrollToUp()
})