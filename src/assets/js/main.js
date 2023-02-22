import { toggleSearchButton } from "./modules/search";
import { announcementsToggle } from "./modules/announcements";
import {
  funFact,
  homeSlider,
  serviceSlider,
  testiSlider,
  navBS,
  stickyHeader,
} from "./modules/owl-init";

const togglerButton = document.querySelector("button.navbar-toggler");
const navbar = document.querySelector("#navbarSupportedContent");
addEventListener("DOMContentLoaded", (event) => {
  toggleSearchButton();
  stickyHeader();
  announcementsToggle();
  navBS(), homeSlider();
  funFact();
  serviceSlider();
  testiSlider();

  if (togglerButton) {
    togglerButton.addEventListener("click", (e) => {
      e.preventDefault();
      navbar.classList.toggle("show");
    });
  }
});
