var botui = new BotUI("botui-app");

botui.message
  .bot({
    delay: 200,
    content: "Hello! 😊 Welcome to *You and Me*!",
  })
  .then(function () {
    return botui.message.bot({
      delay: 1000,
      content: "A special place to capture moments and stay connected. 💖",
    });
  })
  .then(function () {
    return botui.action.button({
      delay: 1500,
      action: [
        {
          text: "Tell me more! 😄",
          value: "more",
        },
        {
          text: "Skip intro, I’m curious about the site! 😅",
          value: "skip",
        },
      ],
    });
  })
  .then(function (res) {
    if (res.value == "more") {
      showMore();
    } else if (res.value == "skip") {
      return botui.message
        .bot({
          delay: 1000,
          content: "Alright, here’s a quick overview of the site! 🎉",
        })
        .then(showPages);
    }
  });

var showMore = function () {
  botui.message
    .bot({
      delay: 1500,
      content:
        "During some quiet time at home, I decided to use my skills to create this site. 🏠✨",
    })
    .then(function () {
      return botui.message.bot({
        delay: 1500,
        content:
          "This is version 2, created to celebrate our 1-year milestone! 🎉",
      });
    })
    .then(function () {
      return botui.message.bot({
        delay: 1500,
        content:
          "I poured a lot of time and effort into this project, and I’m so excited to share it. 💻❤️",
      });
    })
    .then(function () {
      return botui.message.bot({
        delay: 1500,
        content:
          "It’s been a fun and challenging journey building the backend for this site. 🤯",
      });
    })
    .then(function () {
      return botui.message.bot({
        delay: 1500,
        content:
          "There’s just one more update left to complete it! Stay tuned. 😉",
      });
    })
    .then(function () {
      return botui.action.button({
        delay: 1500,
        action: [
          {
            text: "Why is it called *You & Me*? 🤔",
            value: "why",
          },
        ],
      });
    })
    .then(function (res) {
      if (res.value == "why") {
        return explainName();
      }
    });
};

var explainName = function () {
  botui.message
    .bot({
      delay: 1500,
      content:
        "Good question! The name *You & Me* is inspired by the special bond we share. 💞",
    })
    .then(function () {
      return botui.message.bot({
        delay: 1500,
        content:
          "It’s a place to celebrate our moments, memories, and connection. 🌟",
      });
    })
    .then(function () {
      return botui.message.bot({
        delay: 1500,
        content: "Let me give you a quick tour of the site. 🖥️",
      });
    })
    .then(showPages);
};

var showPages = function () {
  botui.message
    .bot({
      delay: 1500,
      content: "Here’s what you’ll find on *You & Me*: 😊",
    })
    .then(function () {
      return botui.message.bot({
        delay: 1500,
        content: "📌 **Home (Index)**: The main page where the story begins.",
      });
    })
    .then(function () {
      return botui.message.bot({
        delay: 1500,
        content:
          "📖 **Moments (Little 💑)**: A gallery of our special memories.",
      });
    })
    .then(function () {
      return botui.message.bot({
        delay: 1500,
        content: "✍️ **Guestbook (Leaving 🐼)**: A place to leave messages.",
      });
    })
    .then(function () {
      return botui.message.bot({
        delay: 1500,
        content:
          "📜 **About (About)**: A little more about the story behind this site.",
      });
    })
    .then(function () {
      return botui.message.bot({
        delay: 1500,
        content: "I hope you enjoy exploring the site! 🎉",
      });
    });
};
