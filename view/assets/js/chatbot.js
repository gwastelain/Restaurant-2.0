function fadeChatbot(speed = 400) {
  $(".chatbot").fadeToggle(speed);
}

fadeChatbot(0);

$(".chatbotButton").click(fadeChatbot);
