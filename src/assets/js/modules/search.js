export const toggleSearchButton = () => {
  const searchButton = document.querySelector(".icon-search");
  const searchBar = document.querySelector(".searchbar");
  if (searchButton) {
    searchButton.addEventListener(
      "click",
      () => {
        searchBar.classList.toggle("active");
      },
      false
    );
  }
};
