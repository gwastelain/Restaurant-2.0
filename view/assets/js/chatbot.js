const chatbot = document.querySelector(".chatbot");
const chatbotButton = document.querySelectorAll(".chatbotButton");

chatbotButton.forEach(el => {
  el.addEventListener("click", () => {
    chatbot.classList.toggle("hide");
  });
});
