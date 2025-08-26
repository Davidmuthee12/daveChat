document.addEventListener("DOMContentLoaded", function () {
  function openWindow() {
    const chatItem = document.querySelector(".chat-item");
    const chatPlaceholder = document.querySelector(".placeHolder");
    const chatWindow = document.querySelector(".chatWindow");
    chatItem.addEventListener("click", function () {
      chatPlaceholder.style.display = "none";
      chatWindow.style.display = "flex";
    });
  }
  openWindow();
});
