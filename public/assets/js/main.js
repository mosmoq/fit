/*
  Fit UI - Front-end interactions only.
  All actions are mocked and do not submit anywhere.
*/

document.addEventListener("DOMContentLoaded", () => {
  const mockForms = document.querySelectorAll("[data-mock-form]");

  mockForms.forEach((form) => {
    form.addEventListener("submit", (event) => {
      event.preventDefault();
      alert("Thanks! This is a UI-only demo. No data was sent.");
    });
  });

  const actionButtons = document.querySelectorAll("[data-action]");

  actionButtons.forEach((button) => {
    button.addEventListener("click", () => {
      const action = button.dataset.action;
      console.log(`UI action triggered: ${action}`);
    });
  });
});
