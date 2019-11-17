-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 21 2018 г., 11:33
-- Версия сервера: 10.1.21-MariaDB
-- Версия PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `epl_ulan`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `Comment_id` int(11) NOT NULL,
  `Username` varchar(256) CHARACTER SET utf8 NOT NULL,
  `Time` datetime NOT NULL,
  `Comment` text CHARACTER SET utf8 NOT NULL,
  `Titlename` varchar(256) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`Comment_id`, `Username`, `Time`, `Comment`, `Titlename`) VALUES
(42, 'Mes', '2018-04-17 00:21:19', 'GGG - champion!', 'Golovkin joint a list of the most renown funs of Premier League'),
(43, 'Mes', '2018-04-17 00:22:39', 'West Ham chempick', 'Golovkin joint a list of the most renown funs of Premier League'),
(44, 'Mes', '2018-04-17 00:28:52', 'Ole\r\n \r\nola', 'Golovkin joint a list of the most renown funs of Premier League'),
(45, 'Admin', '2018-04-17 00:56:03', 'You', 'Mo Salah says Champions League win is far more important than goals record'),
(46, 'Admin', '2018-04-17 00:58:08', 'You will never walk alone', 'Mo Salah says Champions League win is far more important than goals record'),
(47, 'Mes', '2018-04-17 01:00:58', 'Boring Man United', 'Manchester United confirm plan to boost Old Trafford atmosphere'),
(48, 'Mes', '2018-04-17 01:02:13', 'Old Trafford - theater of dreams', 'Manchester United confirm plan to boost Old Trafford atmosphere'),
(49, 'Ulan', '2018-04-19 21:43:36', 'Jay Rodriguezzz', 'West Brom stun Manchester United to hand Manchester City the title'),
(50, 'Ulan', '2018-04-19 21:45:03', 'Great team', 'Manchester City crowned Premier League champions after shock United defeat'),
(51, 'Ulan', '2018-04-19 21:45:28', 'Boring MU', 'Premier League: 10 talking points from the weekendâ€™s action'),
(52, 'Ulan', '2018-04-19 21:46:19', 'Olivier Giroud', 'Premier League: 10 talking points from the weekendâ€™s action'),
(53, 'Admin', '2018-04-20 14:37:33', 'fewdw', 'asdsd'),
(54, 'Admin', '2018-04-20 14:38:05', 'ftyfy\r\n\r\n\r\n4fefef', 'asdsd');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `News_ID` int(11) NOT NULL,
  `Title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Text` text CHARACTER SET utf8 NOT NULL,
  `Image` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Author` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`News_ID`, `Title`, `Text`, `Image`, `Author`) VALUES
(1, 'Manchester United confirm plan to boost Old Trafford atmosphere', 'Manchester United have introduced a new band of ticket pricing for young adults in a bid to improve the atmosphere at Old Trafford.\n\nThe club have confirmed season ticket prices have been frozen for the seventh consecutive year - and they have introduced a new 15-pounds-per-game ticket for 18-25-year-olds in the Stretford End.\n\nThe new banding has been brought in after discussions with fans over improving the match-day atmosphere at the stadium.\n\nThe club hopes the reduced pitch-side seat price in the Streftord End lower will \'reinforce the club\'s commitment to a vibrant atmosphere\'.\n\nUniteds group managing director Richard Arnold said: \"The club enjoys unparalleled support and we recognise the sacrifice many fans make to watch the team home and away. Continuing the freeze in match and season tickets for next season is driven by our belief in supporting fans attending our games.', 'maxresdefault (3).jpg', 'Ulan Zhassanov'),
(2, 'Golovkin joint a list of the most renown funs of Premier League', 'In the part of \"11 renown funs of \"West Ham\" there was the WBA (Super), WBC, IBF and IBO world champion in the middleweight Gennady Golovkin (37-0-1, 33KOs), Sports.kz reports.\r\n\r\n\"Kazakhstan professional boxer Gennady Golovkin, named GGG, an unbeaten champion in the middleweight and a close friend of co-owner of \"West Ham United\" David Sullivan,\" notes the publication.\r\n\r\nWe note that Golovkin on January, 2016, visited a home match of \"West Ham United\" against \"Manchester city\" (2:2). The club gifted the boxer a T-shirt with his that time record on the professional ring on it (34-0) as a player.\r\nIn the part of \"11 renown funs of \"West Ham\" there was the WBA (Super), WBC, IBF and IBO world champion in the middleweight Gennady Golovkin (37-0-1, 33KOs), Sports.kz reports.\r\n\r\n\"Kazakhstan professional boxer Gennady Golovkin, named GGG, an unbeaten champion in the middleweight and a close friend of co-owner of \"West Ham United\" David Sullivan,\" notes the publication.\r\n\r\nWe note that Golovkin on January, 2016, visited a home match of \"West Ham United\" against \"Manchester city\" (2:2). The club gifted the boxer a T-shirt with his that time record on the professional ring on it (34-0) as a player', 'gennadij_golovkin_provedet_sleduyushij_boj_21_fevralya_protiv_britanca_martina_myurreya.jpg', 'Ulan Zhassanov'),
(4, 'Mo Salah says Champions League win is far more important than goals record', '		\r\n	Mohamed Salah has spoken of his pride at becoming only the third player in Liverpoolâ€™s history to score 40 goals in a season but said individual records and accolades are meaningless compared with winning the Champions League.\r\n\r\nThe Egypt international maintained his phenomenal strike-rate on Saturday when he scored his 30th Premier League goal of the campaign in the 3-0 home win against Bournemouth. Salahâ€™s exquisite header beyond Asmir Begovic was also his 40th goal in all competitions â€“ a figure previously achieved at Liverpool by only Roger Hunt (1961-62) and Ian Rush (1983-84 and 1986-87). No Liverpool player has reached the milestone faster than Salah, however, who has scored 40 goals in 45 games for JÃ¼rgen Kloppâ€™s side.\r\n\r\nLiverpoolâ€™s Â£36.9m summer signing from Roma is firmly on course to win the Golden Boot and player of the season awards but admits he would swap them all for victory in the Champions League.\r\n\r\nSalah, who faces his former club in the semi-finals, said: â€œIt means a lot. I try to score every game to help the team and to get the points. That is the most important thing for us, that we play as a team, as 11 players, and so each goal for me is to help the team. It is a great feeling, of course it is a great feeling, but in the end I am just happy to score and help the team. If I had a choice between the Champions League and the Golden Boot, then of course it would be the Champions League, no doubt the Champions League. To win the Champions League is huge for everyone. I donâ€™t care about the rest.â€', 'salah.jpg', 'The Guardian'),
(5, 'Harry Kane will learn from his mauling on social media, says Pochettino', '		\r\n	Mauricio Pochettino believes Harry Kane will â€œlearn a lotâ€ from the controversy over Tottenhamâ€™s second goal against Stoke last Saturday. Spurs chose to appeal a decision to award the goal to Christian Eriksen, after Kane claimed the Daneâ€™s free-kick touched his shoulder on the way into the net.\r\n\r\nThe Premier League goals accreditation panel this week upheld the complaint and gave the goal to Kane. Pochettino said the process had not caused any tension in his camp and insisted he trusts Kane, who is an â€œhonestâ€ player.\r\n\r\nThe Spurs manager did admit, however, that the strength of the public response â€“ which include messages on social media from Mo Salah, Kaneâ€™s rival for the Golden Boot â€“ had caught the striker by surprise. â€œOf course, he never thought that this situation would escalate, when he was so certain that he touched the ball,â€ Pochettino said. â€œAfter the game Harry said he touched the ball with a shoulder, he told Christian. I think Harry is a very honest person, heâ€™s not going to lie about this situation. Itâ€™s not a big issue for the team.\r\n\r\nâ€œItâ€™s normal that he was a little bit disappointed [by the response] because Harry and all our players have Twitter, Instagram and all those things and while Tottenham fans will have supported him, fans of other clubs will have killed him.\r\n\r\nâ€œPeople have opinions, but that is normal. He was disappointed because he never wanted to create this. Sometimes it can seem a simple thing, and then it becomes big and you canâ€™t stop it. That is what happened here. I think he is going to learn a lot from this you know.â€\r\n\r\nSpurs play Manchester City at Wembley on Saturday with Kane hoping to close the gap on Salah in the race to be the divisionâ€™s top scorer. Kane has 25 Premier League goals to the Egyptianâ€™s 29.', '2682.jpg', 'The Guardian'),
(6, 'Premier League: 10 talking points from the weekendâ€™s action', '		\r\n	1) United improvements need to begin with Pogba and SÃ¡nchez\r\nHaving so meekly allowed Manchester City to claim the Premier League title, a process of rebuilding Manchester United into future champions starts now. The non-inclusion of Marouane Fellaini, Daley Blind, Matteo Darmian and Luke Shaw in JosÃ© Mourinhoâ€™s matchâ€‘day 18 for this game at Old Trafford indicated where a long-awaited clear-out of David Moyes and Louis van Gaal recruits is likely to begin. But it will take more than that to revitalise United. The shapeless sludge of this performance against West Brom was no anomaly. Chief among the reasons United have been left in Cityâ€™s wake is Mourinhoâ€™s inability to get the best from his purported stars. Paul Pogba lasted less than an hour before being substituted, while Alexis SÃ¡nchez waits to reveal anything like the form of his best days at Arsenal. John Brewin\r\n\r\nâ€¢ Match report: Manchester United 0-1 West Bromwich Albion\r\nâ€¢ â€˜I know how to win â€“ but I donâ€™t play,â€™ says Mourinho\r\n\r\n2) Guardiola still needs to recruit to claim Champions League\r\nManchester Unitedâ€™s surprise defeat by West Brom handed Pep Guardiolaâ€™s side the title after a topsy-turvy fortnight that defied all predictions. The question now is whether Manchester City can follow up their achievements next season by winning the prize that the club covets more than any other. Despite Guardiolaâ€™s insistence that winning the Premier League was more of an achievement, the failure to add to the two Champions League titles he won at Barcelona is what he will ultimately be judged on. Recruiting another central midfielder to ease the burden on Fernandinho will be a major priority this summer, as will providing extra ammunition to the forward line given Sergio AgÃ¼eroâ€™s troubles with injury. Ed Aarons\r\n\r\nâ€¢ Man City crowned Premier League champions\r\nâ€¢ Man City 2017-18 player ratings: how title winners stack up\r\nâ€¢ Jonathan Wilson: City earn a place in pantheon of great sides\r\n\r\n3) Leicester left with regret over Shakespeare and Mahrez\r\nLeaving themselves with too much to recover has been the story of the season for Leicester City. Defeat at Burnley, who scored their goals in the sixth and ninth minutes, left Claude Puelâ€™s side nine points off seventh place, thus highly unlikely to be playing in the Europa League next season. The clubâ€™s owners continue to count the cost of a misplaced faith in Craig Shakespeareâ€™s credentials to be a permanent manager rather than caretaker or assistant. Puelâ€™s appointment in October after just two victories in nine games proved a far more adept decision but Leicesterâ€™s record of having now lost more games (12) than their 11 wins indicates a squad still failing to live up to its potential. And this is likely to be the last season Riyad Mahrez is around at the King Power Stadium. John Brewin\r\n\r\nâ€¢ Match report: Burnley 2-1 Leicester City\r\n\r\n4) Loftus-Cheek presses claim for England World Cup squad\r\nThe focus was drawn inexorably towards Wilfried Zaha, whose switch to Ivory Coast will always have the England setup cursing. Yet another in Crystal Palace ranks excelled in the M23 derby on Saturday to suggest he could yet have a role to play in Russia. This was Ruben Loftus-Cheekâ€™s best performance at senior club level, the Chelsea loanee driving the hosts forward in a dominant opening period. After more than three months out with ankle trouble, the 22-year-old has swiftly recaptured form. â€œHe has qualities,â€ said Roy Hodgson. â€œHe was very good at screening, keeping the ball. Heâ€™s very good at beating players. His workrate has been very good. If he can play regularly for the last part of the season, then we will see him doing more and more as a player.â€ A place in the World Cup squad is far from outlandish. Dominic Fifield\r\n\r\nâ€¢ Match report: Crystal Palace 3-2 Brighton & Hove Albion\r\nâ€¢ The Dozen: the weekendâ€™s best Premier League photos\r\n\r\n\r\nThe Dozen: the weekendâ€™s best Premier League photos\r\n5) Huddersfield prove that top-flight experience is overrated\r\nHuddersfield defied the odds to reach the Premier League and are on the verge of an even more improbable achievement this season. They will probably avoid relegation from the top flight â€“ beating Everton at home next weekend would practically confirm that â€“ and if they do they will have debunked the notion a team can only survive if they have a core of wily Premier League veterans. Only three of the 24 players used by David Wagner this season had Premier League experience and two of those barely featured this season (Dean Whitehead has played 65 minutes, while Martin Cranie made three appearances before being sold in January). Huddersfieldâ€™s players do have experience of keeping cool in high-stakes duels, thanks to their play-off triumph last year, and the benefit of playing for one of Englandâ€™s bestâ€‘run clubs. Paul Doyle\r\n\r\nâ€¢ Match report: Huddersfield Town 1-0 Watford\r\n\r\n6) Klopp wants numbers to add up to silverware\r\nMohamed Salahâ€™s 30th Premier League goal this season and 40th in all competitions for Liverpool was not the only statistic that had Anfield purring against Bournemouth. Despite an exhausting midweek win against Manchester City in the Champions League there was no let-up from JÃ¼rgen Kloppâ€™s team as they took their goals tally under the German to 300 in 148 games. Salah, Roberto Firmino and Sadio ManÃ© have scored 82 goals this season â€“ the highest total from Liverpoolâ€™s three leading scorers in a single campaign. The manager wants more. Klopp said: â€œThree hundred is really a massive number. I love watching that kind of football but I donâ€™t want to be the entertainer and it is like: â€˜Oh we had fun but we didnâ€™t win anything.â€™ I know the reason we come here together is to win things but I think the way you try to do it is important.â€ Andy Hunter\r\n\r\nâ€¢ Match report: Liverpool 3-0 Bournemouth\r\nâ€¢ Salah says European triumph is more important than goals record\r\n\r\n7) BenÃ­tez continues to bring best out of Newcastle squad\r\nThe best coaches improve players and, by that criterion, Rafaek BenÃ­tez must be regarded as exceptional. An alarmingly limited and inexperienced Newcastle squad are up to 10th, on 41 points, having just secured a fourth straight win, at Arsenalâ€™s expense. Since New Yearâ€™s Day they have collected 22 points from a possible 36. Much of that is down to the extraordinary progress made by, among others, Jonjo Shelvey, Jamaal Lascelles, Mo DiamÃ©, Ayoze PÃ©rez and Paul Dummett since August. â€œStaying up is a fantastic achievement in what has been a very difficult season,â€ said BenÃ­tez, whose January loan recruitment of the Sparta Prague goalkeeper Martin Dubravka and Chelsea left winger Kenedy have proved shrewd. â€œEvery week the whole team is progressing and improving. Iâ€™m really pleased.â€ Louise Taylor\r\n\r\nâ€¢ Match report: Newcastle United 2-1 Arsenal\r\nâ€¢ Jonathan Wilson: Arsenal fail to learn their lesson\r\nâ€¢ Wenger says Arsenal defeat at Newcastle was â€˜a worry character wiseâ€™\r\n\r\n8) Giroud finally shows his worth to Chelsea\r\nThere were a number of variables at work at St Maryâ€™s. First was the bullish strength of Olivier Giroud, whose determination to make the most of every moment led to a change in attitude throughout the team. Then there was the mental frailty of Southampton, perhaps to be expected of a club in deep relegation trouble. And finally there was a tactical tweak and the rare sighting of a Blues back four. Conteâ€™s preference for a three-man defence is renowned, the security it provides being the bedrock on which the rest of Chelseaâ€™s play is built. It also puts a lot of stress on the wingâ€‘backs to deliver from forward positions. Last season they rose to the challenge, this time not so much. Marcos Alonso remains a potent threat but not in this match, and when he stepped back to allow Willian and Pedro to roam the wide spaces Chelsea posed a very different set of questions. Paul MacInnes\r\n\r\nâ€¢ Match report: Southampton 2-3 Chelsea\r\nâ€¢ Hughes tells Southampton players to â€˜get details rightâ€™ to survive\r\nâ€¢ Kirby sends Chelsea into Womenâ€™s FA Cup final against Arsenal\r\n\r\n9) Jordan Ayew continues to give Swansea hope\r\nEvery club in the relegation battle needs a talisman to provide hope and inspiration, and Swansea have found theirs in Jordan Ayew. The 26-year-old has been a player transformed since Carlos Carvalhal took over as manager, scoring six times but bringing far more than just goals to a team who were so prosaic and toothless in the first half of the season. Ayewâ€™s ability to hold the ball up, together with his skill and trickery, gives Swansea an attacking dimension badly missed during his three-match ban. He returned against Everton, playing alongside his brother AndrÃ©, and was a constant threat, linking play, creating chances and scoring an equaliser â€“ his 11th goal of the season â€“ with a wonderfully taken halfâ€‘volley. â€œWe know that we will always fight and die for this club, because it has given me and my brother so much,â€ Jordan said afterwards. Stuart James\r\n\r\nâ€¢ Match report: Swansea City 1-1 Everton\r\n\r\n10) FA Cup remains significant target for Pochettino\r\nTottenhamâ€™s excellent run of 14 games without defeat came to an end against a resurgent Manchester City clearly with a point to prove but Mauricio Pochettino will be concerned that his side can pick themselves up quickly for Saturdayâ€™s FA Cup semi-final against Manchester United. For all his success in making Spurs into genuine contenders, Pochettino has yet to win a trophy as a manager while it is now a decade since Tottenham supporters were last able to celebrate some silverware, the 2008 League Cup. Even if he has previously insisted that the domestic cup competition would not make up for failure elsewhere, with a top four place almost in the bag before Tuesdayâ€™s trip to face Brighton in the league, there is no reason why their manager cannot approach their semi-final full of ambition. Ed Aarons', '2560.jpg', 'The Guardian'),
(7, 'Manchester City crowned Premier League champions after shock United defeat', 'Vincent Kompany has challenged his Manchester City team-mates to retain their Premier League title after Manchester Unitedâ€™s shock defeat to the bottom side, West Brom, confirmed Pep Guardiolaâ€™s men as champions.\r\n\r\nWith Kompany watching on at his wifeâ€™s family home after Cityâ€™s 3-1 victory over Tottenham on Saturday evening meant United had to avoid defeat against Albion to keep the title race alive, Jay Rodriguezâ€™s goal at Old Trafford ensured the trophy will head to the other side of Manchester for the third time in seven seasons.\r\n\r\nâ€œYou canâ€™t take them for granted â€“ Iâ€™ve been lucky to win three but there have been so many Iâ€™ve missed as well,â€ said Kompany. â€œToday Iâ€™m happy and I suppose my team-mates will roll their eyes a little bit but I kind of want to see what the reaction is going to be now. Iâ€™ve never retained the title and I want to see if this team has got it to carry on and be even more successful.â€\r\n\r\nHe added: â€œI had that feeling when I woke up this morning but I donâ€™t like to wait and see a team lose so it was a little bit of a different experience today. West Brom are a good team and they donâ€™t deserve to be that low and as they stuck into the game you realised that something could happen. It was a set piece and a lovely goal from Rodriguez so thank you. It was a great feeling.â€\r\n\r\nGuardiola, who said on Saturday that he would be playing golf rather than watching the match, can now add a Premier League winnerâ€™s medal to those he claimed in the Bundesliga with Bayern Munich and La Liga with Barcelona. City players posted celebratory messages on Twitter with Kevin De Bruyne writing: â€œUnbelievable season for us. Very happy to call us champions this year.â€\r\n\r\nConfirmation of the title success comes as a fillip at the end of a difficult spell for City, during which they lost in the Manchester derby and suffered a Champions League exit at the hands of Liverpool. By completing the job after 33 games, City have emulated the achievement of United, who also secured the crown with five matches to spare in 2001.\r\n	', '3870.jpg', 'The Guardian'),
(8, 'Arsenal 3-2 Southampton', '		\r\n	Pierre Emerick Aubameyang has been directly involved in seven goals in his first seven Premier League matches, with six goals and one assist, the most by an Arsenal player in their first seven appearances\r\n\r\nPierre Emerick Aubameyang has been directly involved in seven goals in his first seven Premier League matches, with six goals and one assist, the most by an Arsenal player in their first seven appearances', '943349836.jpg', 'premierleague.com'),
(9, 'West Brom stun Manchester United to hand Manchester City the title', 'The only surprise, perhaps, is that Manchester United have kept the title race going as long as they have when they are capable of playing this abysmally. They find themselves 16 points behind Manchester City, the newly crowned Premier League champions. Their goal difference is 31 inferior to Pep Guardiolaâ€™s team and the final twist in the story of a one-sided title race counts as a humiliation for a club with their haughty ambitions.\r\n\r\nIt was a defeat at home by the Premier Leagueâ€™s wooden-spoon team, with the Old Trafford stands barely half-full and the players booed off by many of the people who had chosen not to leave early. Was this really the team who won 3-2 at City in one of the seasonâ€™s great comebacks? It was only eight days earlier that Mourinhoâ€™s players could be seen throwing their shirts into a euphoric away end at the Etihad Stadium. Now they were wandering around like zombies, drenched in a Mancunian downpour, losing against the worst team in the league.\r\n\r\nMourinho called his players the â€œmasters of complicated footballâ€ but that was being generous after one of the more startling displays of his two years in charge. West Brom have been submerged in the relegation quicksands since December. Their previous away win in the league came in August and there has been only one other occasion in the Premier League years, against Blackburn Rovers in 2011, when United have lost at home against the leagueâ€™s bottom club.\r\n\r\nEven when Jay Rodriguez headed in the decisive goal, in the 73rd minute, it was alarming to see the lack of fight from a team, lest it be forgotten, that have won this league 20 times. Sir Alex Ferguson used to boast there was no other side in the world who scored as many late goals as his â€“ but not the current version. United drifted aimlessly towards the final whistle without ever looking as if they had the wit or gumption to save themselves. Thousands of people had gone before the end. â€œManchester City, weâ€™ve won you the league,â€ was the cry from the West Brom fans.		\r\n	', '3859.jpg', 'premierleague.com'),
(10, 'asdsd', '		\r\n	fweafwaefwaef\r\n\r\n\r\nefwea v            wefwea', 'acm.png', 'Ulan Zhassanov');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `User_ID` int(11) NOT NULL,
  `Name` varchar(256) CHARACTER SET utf8 NOT NULL,
  `Surname` varchar(256) CHARACTER SET utf8 NOT NULL,
  `Email` varchar(256) CHARACTER SET utf8 NOT NULL,
  `Username` varchar(256) CHARACTER SET utf8 NOT NULL,
  `Password` varchar(256) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`User_ID`, `Name`, `Surname`, `Email`, `Username`, `Password`) VALUES
(1, 'Leo', 'Messi', 'dadaas@gmail.com', 'Mes', '$2y$10$PowfiVshaUC1dSv6v/h.QuST2K47QWE28YQNz7ouYP/rY/isDrBJS'),
(2, 'dwdw', 'dwdw', 'dadaas@gmail.com', 'Ulan', '$2y$10$ZL18IX02fml2K8v8TdDJwu15FZf9Ps1jftVcUiNmlWnOADqJZvwvK'),
(3, 'Ulan', 'Zhassanov', 'ulan.zhasanov@mail.ru', 'Admin', '$2y$10$LsiJcNDn.zw/TZdbBprv9.GnhNE7SFVJXOY5f0pOWhdNdMKT1b/yO'),
(6, 'don', 'zhumakhan', 'don@mail.ru', 'don02', '$2y$10$.htGqxehIdsmzqehfCiQ7OYIpKTxpp.rEX92fBoLVxlswO/IuN9ka'),
(7, 'Ulan', 'Ulan', 'as@m.ru', 'Rollan', '$2y$10$9AVBFfkmnb3ICb9rHcqJ/.E.U.LCXavjfVwvdavWhvJhKq.0Ypck2');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`Comment_id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`News_ID`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `Comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `News_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
