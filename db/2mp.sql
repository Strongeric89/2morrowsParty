-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 11, 2018 at 09:34 PM
-- Server version: 5.7.18
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2mp`
--

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `date` date NOT NULL,
  `venue` varchar(50) NOT NULL,
  `query` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

CREATE TABLE `shows` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `location` varchar(255) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shows`
--

INSERT INTO `shows` (`id`, `date`, `location`, `time`) VALUES
(1, '2018-01-27', 'Tolka Pub', 10),
(2, '2018-01-13', 'The Wedding Journal Show', 11);

-- --------------------------------------------------------

--
-- Table structure for table `testamonials`
--

CREATE TABLE `testamonials` (
  `id` int(11) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testamonials`
--

INSERT INTO `testamonials` (`id`, `message`, `customer`, `date`) VALUES
(1, 'Without question made our wedding day even better, ter quality and professional was 2nd to none, if you want everyone on d dance floor then 2morrow party are the band for you.', ' Graham and Jane', '2017-08-26'),
(2, 'We can\'t thank 2morrow\'s party enough for their fantastic service. They played a huge range of songs which had the dance floor full for the night. Greg is extremely professional and easy to deal with. I would highly recommend this band to any couple', 'Barbara', '2017-07-29'),
(3, 'Amazing band and great 90s mashup at the end. Highly recomend', 'Ger', '2017-06-02'),
(4, 'Fantastic band, 2morrows party. Very professional. They chatted and mixed with guests. Great range of old and new songs. They had everybody up dancing. They added to an already fantastic day.', 'Michelle Andrews', '2017-06-02'),
(5, 'This band were brilliant. Guests were saying they would recommend them. They were pitch perfect. The lead singer had a great voice, great range. Played all the favourites, and very professional. They had the dance floor full all night.', 'Bert', '2017-06-02'),
(6, 'This band is absolutely brilliant. Ive seen them before the wedding a good few times but they really get everyone up on the dance floor, from playing all kinds of songs everyone will love them!', 'Niamh Andrews', '2017-06-02'),
(7, 'Gerry and Fiona, we attended a wedding on June 1st 2017 in motvalley. The lads put on an amazing show. They started off with a bang. Had everybody in the room on their feet from the word go. The second half of the show really showed that this band are something specials playing all 90s dance classics. Would highly recommend. I have told all my friends about them.', 'Gerry and Fiona', '2017-06-02'),
(8, 'Really interactive and involved with the crowd. Definitely recommend to anyone!', 'Nichola Cosgrave', '2017-06-02'),
(9, 'brilliant band had the floor full from start to finish really professional and such a wide range of songs we loved them would definitely like to see them again and would recommend them for anyone needing a band thanks for great night guys', 'Paddy Cosgrave', '2017-06-02'),
(10, 'Brilliant Band kept us all going good entertainment', 'Darren Cosgrave', '2017-06-02'),
(11, 'Great day , The band was brilliant Got everybody up dancing start to finish Highly recommended', 'Anita Knowles', '2017-06-02'),
(12, 'In tune with what people want...from start to finish really fantastic entertainment... they are accommodating in any changes we had... We would definitely recommend them. Well done lads in our wedding going so smooth..', 'Robb', '2017-06-02'),
(13, 'Amazing band! People are still talking about them. From start to finish the floor was full.they had some really cool mash ups :) Would 100% recommend', 'Laura and Nicky', '2017-05-19'),
(14, 'Got married recently. Had Gregory and the lads as a band and DJ. They were absolutely incredible I must say! Great bunch of lads really made the day. Great interaction with all of the guests also. My wife and I are delighted to have chosen them for our special day. Hope to catch yous at a gig sometime soon men!', 'Mike Denver', '2017-05-19'),
(15, 'We got married in March , had this Band including the DJ Greg. They were brilliant!! Such a lovely group of lads, very accommodating and they interacted with our guests all night. The dance floor was full all night! Would recommend them 100%!!', 'Audrey Farrell', '2017-03-16'),
(16, 'Would give these guys a 5 star recommendation!! From the minute we booked them nothing was a problem! Such lovely guys and our guests burned the dance floor up!! Had a brilliant little surprise for us aswell if you want to know check out their Facebook page! You have to go hear these guys youll be blown away!!!', 'Louise Molloy', '2017-03-16'),
(17, 'Booked 2morrows party for our wedding in wicklow OMG they were brilliant!!! the dance medley was insane everyone had sore feet the next day!! thanks again Ive recommended you to all my friends!! xxx', 'Jason and Celine Moreton', '2017-02-04'),
(18, 'What a great band they really made our night! We viewed a few differant bands but when we went to see 2morrows party live we knew they were the band for us!! everyone was asking who they were, the lads were great to deal with highly recommend!!', 'Orla and Derek', '2017-01-07'),
(19, 'At a wedding recently and 2morrows party played, they were brilliantbhad everyone up on the dancefloor and had such a great atmosphere about them. Would highly recommend them to any couole for their wedding, they did a brilliant job!', 'anon', '2017-01-07'),
(20, '2morrows Party are an amazing wedding band. We booked them after only listening to three songs. They really know how to get your wedding guests up and dancing. From the very first song right to the end the dance floor was full. They were able to cater to all age groups and interacted well with everyone. I can say that they lads were very friendly and very professional. We got them for the wedding band and dj and there prices we very competitive.', 'Leona Murpy', '2016-12-03'),
(21, 'We booked 2morrows party for our wedding last November we couldnt recommend them highly enough they had everybody on the floor all night and everyone praised them excellent', 'Aine and Colin Hoey', '2016-11-12'),
(22, 'The band were great to work with . I looked at many bands for our wedding but 2morrows party were the best by far the way they keep the dance floor full the whole night and the way they interact is amazing I would recommend 2morrows party to anyone they really know how to put on a great show', 'Jenny Polkowski', '2016-10-07'),
(23, 'Booked 2morrows party for our wedding last July. I cannot recommend them enough..They were excellent the whole place was dancing for the night. Everyone who attended our wedding complimented us on the band saying they were fantastic. My best friend has even booked them for her own wedding next year..', 'Caoimhe and Brendan', '2016-07-23'),
(24, 'I want to say a huge thank you the band were awesome everyone was talking about them! Amazing!! I have recommended them to all my friends nice bunch of lads!!', 'Louise and Emmet', '2016-07-16'),
(25, 'Great Great Band !! - Highly recommend them .', 'Mary', '2016-05-07'),
(26, 'All our guests were raving on about 2morrows party. would definitely recommend them. they travelled all the way to galway for our wedding with no hassle. it was smooth sailing with these guys which makes everything so much easier when your planning a wedding.', 'Mr and Mrs Martin', '2016-04-29'),
(27, 'Great band !.. Would highly recommend!!', 'SineadH', '2016-04-16'),
(28, 'My daughter had Greg and his band 2morrows party play at her wedding they were amazing from beginning to end we never left the dance floor, and Greg did DJ afterwords, thanks lads for a brilliant night will recommend you to to all we know and hope to see you back to gig soon????', 'Cathy Leahy', '2016-04-06'),
(29, 'I would highly recommend 2morrows Party as a Wedding band. The have all the qualities that make a great band: a great selection of songs to suit everyone, great crowd participation/ interaction, ability to keep the dance floor full, very talented, professional and accommodating. The DJ music to follow was top notch. We had lots of compliments and enquiries about our band afterwards. They are playing at my sisters wedding in a few weeks and we cant wait.', 'Christine and Shane Conlon', '2016-03-12'),
(30, 'These guys absolutely made our wedding people are still talking about how good they were! People never left the dancefloor all night . Could not recommend them highly enough. Very easy going and absolute gents to deal with.', 'Ricky and Leah', '2015-12-12'),
(31, 'Fantastic in every way, flexible set list and the interaction with our guests was something Special, the dance floor wasnt idle for a second of the night. Thanks lads well done!', 'Daire and Claire', '2015-07-30'),
(32, 'Absolutely brilliant band!! so much better than the other bands we viewed we had an absolute ball, all our guests loved them! thanks so much xxx', 'Annmarie and Gerry', '2015-07-24'),
(33, 'Amazing band! us and our guests never left the dancefloor all night!! thanks so much you really made our day', 'Gemma and Bernard Donnelly', '2015-07-24'),
(34, 'Excellent band really have a good relationship with the guests and what gets them going Very helpful in the lead up to the big day', 'Paddy S', '2015-07-01'),
(35, '2morrows Party know how to get the dancefloor full! Amazing set lists and great personalities that you dont want to sit down - youre up on thr floor until the last song. Highly recommend this band!!', 'Kelly S', '2015-07-01'),
(36, 'Band were amazing everyone enjoyed them so much even the dj and the hotel staff were wowed by them, loved theyre responsiveness and theyre wide range of songs they could play, they were the talking point for days afterwards. Would highly recommend them theyre a great bunch of lads', 'Irene Burke', '2015-05-15'),
(37, 'Great guys great variety best band around, we will be booking again for our babys christening :) x', 'Charlotte Kelly', '2014-12-26'),
(38, 'Absolutely fabulous also did Dj as well 220 people on the floor the whole night there is no better if you want your floor packed', 'Barry and Niamh', '2014-08-22'),
(39, 'We had these guys entertain our guests the night after our wedding, they were awesome ! Gotta be one of the best bands out there :-)', 'Kieran', '2013-08-31'),
(40, 'such a class act we have the lads for our wedding and they really made our night had everyone going from young to old they have a wide range of songs and everyone was catered for. they were the talk of our day money well spent would highly recommend them to anyone looking for a band for their wedding :) Cheers Hugo and Claudine)', 'Claudine & Hugo', '2013-08-15'),
(41, 'Most amazing wedding band available in Ireland!interaction, enjoyable and Such a great set up, playing a wide range of songs to suit all ages.A great bunch of guys, people still talking about them from the wedding.', 'Charlotte & Richie', '2014-12-26'),
(42, 'I knew straight away who i wanted to play at our wedding...This band is made up of the nicest bunch of guys who will do whatever it takes to make your wedding evening one everyone will remember and talk about for a long time. The lads hadnt an easy quest as most of our guests are amazingly talented musicians but the guys of 2morrows Party entertained us right til the very early hours of the morning :)  A wide selection of music professionally played that suits all ages andbackgrounds...i just wish we could do it all again guys x', 'Linda and Alan Clarke', '2013-04-02'),
(43, 'These guys are such a class act we have the lads for our wedding and they really made our night had everyone going from young to old they have a wide range of songs and everyone was catered for. they were the talk of our day money well spent would highly recommend them to anyone looking for a band for their wedding :)', 'Claudine and hugh McDonagh', '2013-05-12'),
(44, 'Hey guys, what can I say you were absolutely brilliant to deal with from day one. you guys were so professional and kept the crowd going and the dance floor full all night! so fun and energetic brilliant night thank you so much', 'Claire and Mickey', '2014-10-13'),
(45, 'My friend suggested to get 2morrows Party for my wedding, so we went to see them play in Cairnes bar. My fiance and I & all my friends loved them. Young & old audience was dancing to their music! So it was a definite choice to get them to play at our wedding!\r\nThey were brilliant at the wedding, all my guest loved them! They played all the popular music so all age groups could enjoy! Everyone was on the dance floor from the minute they started till they finish playing! The DJ was great too! 2morrows Party made our wedding memorable and special! Affordable price too!\r\nThanks a million lads!', 'Evita and Mark', '2015-11-13'),
(54, 'stufff', 'eric test', '2018-01-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shows`
--
ALTER TABLE `shows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testamonials`
--
ALTER TABLE `testamonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `shows`
--
ALTER TABLE `shows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `testamonials`
--
ALTER TABLE `testamonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
