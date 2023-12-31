<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => "Ganto's Two Meals",
                'koan' => "Kisan paid a visit to Ganto, who was living in quiet seclusion, and asked, \"Brother, are you getting two meals regularly?\" \"The fourth son of the Cho family supports me, and I am very much obliged to him,\" said Ganto. \"If you do not do your part well, you will be born as an ox in the next life and will have to repay him for what you owed him in this life,\" Kisan cautioned.n Ganto put his fists on his forehead but said nothing. \"If you mean horns,\" Kisan said, \"you must stick out your fingers on top of your head.\" But before he finished speaking, Ganto shouted, \"Hey!\" Kisan did not understand his meaning and said, \"If you know something deeper, why don't you explain it to me?\" Ganto hissed at him and said, \"You have been studying Buddhism for thirty years, as I have, and you are still wandering around. I have nothing to do with you. Just get out.\" And with these words he shut the door in Kisan's face.nThe fourth son of the Cho family happened to be passing by and, out of pity, took Kisan to his home. \"Thirty years ago we were close friends,\" Kisan said sorrowfully, \"but now he has attained something higher than I have and will not impart it to me.\"nThat night Kisan could not sleep. He got up and went to Ganto's house. \"Brother,\" he implored, \"please be kind and preach the Dharma for me.\" Ganto opened the door and disclosed the teaching. The next morning Kisan returned home, happy with attainment",
                'status' => 1
            ],
            [
                'title' => "Bodhidharma and the Emperor Wu",
                'koan' => "Emperor Wu of China was a very benevolent Buddhist. He built many temples and monasteries, educated many monks, and performed countless philanthropic deeds in the name of Buddhism. He asked the great teacher Bodhidharma, \"What merit is there in my good works?\" Bodhidharma replied, \"None whatsoever.\" The Emperor then asked, \"What is the Primal meaning of Holy Reality?\" Bodhidharma answered, \"Emptiness, not holiness.\" The Emperor then queried, \"Who, then, is this confronting me?\" \"I do not know,\" was Bodhidharma's reply. Since the Emperor did not understand, Bodhidharma left his kingdom.nLater, the Emperor related this conversation to an adviser, Prince Shiko. Shiko reprimanded him, saying that Bodhidharma was a great teacher possessed of the highest truth. The Emperor, filled with regret, dispatched a messenger to entreat Bodhidharma to return. But Shiko warned, \"Even if all the people in the land went, that one will never return.",
                'status' => 1
            ],
            [
                'title' => "Returning to the Ordinary World",
                'koan' => "A monk asked Kegon, \"How does an enligthtened one return to the ordinary world?\" Kegon replied, \"A broken mirror never reflects again; fallen flowers never go back to the old branches.",
                'status' => 1
            ],

            [
                'title' => "No Beard",
                'koan' => "Wakuan complained when he saw a picture of bearded Bodhidharma, \"Why hasn't that fellow a beard?",
                'status' => 1
            ],
            [
                'title' => "Everything is Best",
                'koan' => "One day Banzan was walking through a market. He overheard a customer say to the butcher, \"Give me the best piece of meat you have.\" \"Everything in my shop is the best,\" replied the butcher. \"You can not find any piece of meat that is not the best.\" At these words, Banzan was enlightened.",
                'status' => 1
            ],
            [
                'title' => "Manjusri Enters the Gate",
                'koan' => "One day as Manjusri stood outside the gate, the Buddha called to him, \"Manjusri, Manjusri, why do you not enter?\" Manjusri replied, \"I do not see myself as outside. Why enter?",
                'status' => 1
            ],
            [
                'title' => "Where to Meet after Death",
                'koan' => "Dogo paid a visit to his sick fellow monk, Ungan. \"Where can I see you again if you die and leave only your corpse?\" Dogo asked. \"I will meet you where nothing dies,\" Ungan replied. Dogo criticized his response saying, \"What you should have said is that there is no place where nothing is born and nothing dies and that we need not see each other at all.",
                'status' => 1
            ],
            [
                'title' => "A Philosopher Asks Buddha",
                'koan' => "A philosopher asked Buddha: \"Without words, without silence, will you tell me the truth?\" The Buddha sat quietly. The philosopher then bowed and thanked the Buddha, saying, \"With your loving kindness I have cleared away my delusions and entered the true path.\" After the philosopher had gone, Ananda asked Buddha what the philosopher had attained. The Buddha commented, \"A good horse runs even at the shadow of the whip.",
                'status' => 1
            ],
            [
                'title' => "Jizo's Buddhism",
                'koan' => "One day, Jizo received one of Hofuku's disciples and asked him, \"How does your teacher instruct you?\" \"My teacher instructs me to shut my eyes and see no evil thing; to cover my ears and hear no evil sound; to stop my mind-activities and form no wrong ideas,\" the monk replied. \"I do not ask you to shut your eyes,\" Jizo said, \"but you do not see a thing. I do not ask you to cover your ears, but you do not hear a sound. I do not ask you to cease your mind-activities, but you do not form any idea at all.",
                'status' => 1
            ],
             [
                'title' => "The Southern Mountain",
                'koan' => "Sekiso lived and taught on the Southern Mountain, and Kankei lived and taught on the Northern Mountain. One day, a monk came from the Northern Monastery to the Southern Monastery in search of teaching. Sekiso said to him, \"My Southern Monastery is no better than the Monastery in the North.\" The monk did not know what reply to make. When he returned to Kankei and told him the story, Kankei said, \"You should have told him that I am ready to enter Nirvana any day.",
                'status' => 1
             ],
             [
                'title' => "The Girl Comes Out of Meditation",
                'koan' => "Once upon a time, Manjusri, the Bodhisattva of Wisdom, went to an assemblage of Buddhas. By the time he arrived, all had departed except for the Buddha Sakyamuni and one girl. She was seated in a place of highest honor, deep in meditation. Manjusri asked the Buddha how it was possible for a mere girl to attain a depth of mediation that even he could not attain. The Buddha said, \"Bring her out of meditation and ask her yourself.\"nSo Manjusri walked around the girl three times [a gesture of reverence], then snapped his fingers. She remained deep in meditation. He then tried rousing her by invoking all his magic powers; he even transported her to a high heaven. All was to no avail, so deep was her concentration. But suddenly, up from below the earth sprang Momyo, an unenlightened one. He snapped his fingers once, and the girl came out of her meditation.",
                'status' => 1
            ],
            [
                'title' => "The Southern Mountain",
                'koan' => "Joshu addressed an assembly of monks: \"The Real Way is not difficult;, but it dislikes the Relative. If there is but little speech, it is about the Relative or it is about the Absolute. This old monk is not within the Absolute. Do you value this or not?\" A monk said to him, \"If you are not within the Absolute, how can you judge its value?\" Joshu said, \"Neither do I know that.\" The monk argued, \"Your Reverence, if you do not yet know, how is it that you say you are not within the Absolute?\" Joshu said, \"Your questioning is effective. Finish your worship and leave.",
                'status' => 1
            ],

            [
                'title' => "The Turtle in the Garden",
                'koan' => "A monk saw a turtle in the garden of Daizui's monastery and asked the teacher, \"All beings cover their bones with flesh and skin. Why does this being cover its flesh and skin with bones?\" Master Daizui took off one of his sandals and covered the turtle with it.",
                'status' => 1
            ],

            [
                'title' => "The Temple",
                'koan' => "One day Hofuku said to his disciples, \"When one passes behind the temple, he meets Chang and Li, but he does not see anyone in front of it. Why is this? Which of the two roads is better?\" A monk answered, \"Something must be wrong with the sight. Nothing is gained without seeing.\" The Master scolded the monk, saying, \"Stupid, the temple is always like this.\" The monk said, \"If it were not the temple, one should see something.\" The Master said, \"I am talking about the temple and nothing else.",
                'status' => 1
            ],

            [
                'title' => "Lotus Blossoms and Leaves",
                'koan' => "A monk asked Chimon, \"Before the lotus blossom has emerged from the water, what is it?\" Chimon said, \"A lotus blossom.\" The monk pursued, \"After it has come out of the water, what is it?\" Chimon replied, \"Lotus leaves.",
                'status' => 1
            ],
        ];

        // Insert the data into the database table
        DB::table('koans')->insert($data);
    }
}
