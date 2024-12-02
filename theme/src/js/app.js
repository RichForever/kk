import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

import anchorScroll from './components/anchorScroll';
import scrollToUp from './components/scrollToUp';
import { initBlock } from './blocks';

const blockNames = [
  "contact",
  "cta",
  "cta-with-form",
  "faq",
  "hero",
  "info-boxes",
  "page-title",
  "recent-posts",
  "slider-grid-images",
  "text-with-image",
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