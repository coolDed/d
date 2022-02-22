#include <stdio.h>
#include <tgbot/tgbot.h>

int main() {
	TgBot::Bot bot("5241379441:AAHjw3GCjK_zYXX0tpaHKW8OUPleM_K3974");
	bot.getEvents().onCommand("start", [&bot](TgBot::Message::Ptr message) {
		bot.getApi().sendMessage(message->chat->id, "Hi!");
	});
	bot.getEvents().onAnyMessage([&bot](TgBot::Message::Ptr message) {
		printf("User wrote %s\n", message->text.c_str());
		if (StringTools::startWith(message->text, "/start")) {
			return;
		}
		bot.getApi().sendMessage(message->chat->id, "Your message is: " + message->text);
	});
	try {
		printf("Bot usernume: %s\n", bot.getApi().getMe()->username.c_str());
		TgBot::TgLongPoll longPoll(bot);
		while (true) {
			printf("Long poll started\n");
			longPoll.start();
		}
	} catch(TgBot::TgException& e) {
		printf("error: %s\n", e.what());
	}
	return 0;
}