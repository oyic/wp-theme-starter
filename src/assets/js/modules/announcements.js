export const announcementsToggle = () => {
  const announcementsButton = document.querySelector(
    ".covid-message .removeit"
  );
  const announcements = document.querySelector(".covid-message");
  if (announcements && announcementsButton) {
    announcementsButton.addEventListener(
      "click",
      (e) => {
        e.preventDefault();
        announcements.remove();
      },
      false
    );
  }
};
