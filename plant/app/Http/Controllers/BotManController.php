<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;

class BotManController extends Controller
{
    /**
     * Handle the incoming messages from the Botman chatbot.
     */
    public function handle()
    {
        $botman = app('botman');

        // Listen for any message
        $botman->hears('{message}', function ($botman, $message) {
            // Convert the message to lowercase for case-insensitive handling
            $message = strtolower($message);

            // Check for greetings
            if (strpos($message, 'hi') !== false || strpos($message, 'hello') !== false || strpos($message, 'hey') !== false) {
                $this->askName($botman);
            }
            // Check for plant care tips
            elseif (strpos($message, 'plant care tips') !== false) {
                $botman->reply('Here are some plant care tips:
                1. Water your plants early in the morning or late in the evening.
                2. Use well-draining soil to prevent root rot.
                3. Prune dead leaves and stems regularly.');
            }
            // Check for watering plants
            elseif (strpos($message, 'water') !== false) {
                $botman->reply('To water plants properly:
                1. Focus on watering the soil, not the leaves.
                2. Check the top inch of soil – if it’s dry, water the plant.
                3. Avoid overwatering, as it can cause root rot.');
            }
            // Check for fertilizing plants
            elseif (strpos($message, 'fertilize') !== false || strpos($message, 'fertilizing') !== false) {
                $botman->reply('To fertilize plants:
                1. Use organic fertilizers like compost or manure.
                2. Apply fertilizer around the base, avoiding direct contact with stems.
                3. Fertilize during the growing season (spring and summer).');
            }
            // Check for sunlight requirements
            elseif (strpos($message, 'sunlight') !== false || strpos($message, 'light') !== false) {
                $botman->reply('Most plants need at least 6 hours of sunlight daily. However, indoor plants like ferns, pothos, and snake plants thrive in low light.');
            }
            // Check for soil requirements
            elseif (strpos($message, 'soil') !== false) {
                $botman->reply('For soil:
                1. Use well-draining soil for most plants.
                2. Add organic matter like compost to enrich the soil.
                3. Check the pH level of the soil for specific plants (e.g., acidic soil for roses).');
            }
            // Default response for unknown inputs
            else {
                $botman->reply("I'm sorry, I didn't quite get that. You can ask about:
                - Plant care tips
                - How to water plants
                - Fertilizing plants
                - Sunlight or soil requirements
                - Or start a conversation by saying 'hi'.");
            }
        });

        $botman->listen();
    }

    /**
     * Ask the user for their name when they say 'hi'.
     */
    public function askName($botman)
    {
        $botman->ask('Hello! What is your name?', function (Answer $answer, $conversation) {
            // Capture the user's name
            $name = $answer->getText();
            // Respond with a personalized message
            $this->say('Hi ' . ucfirst($name) . '! Welcome to Vijitha Plant Nursery. How can we help you?');
        });
    }
}
