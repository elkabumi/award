-- --------------------------------------------------------

--
-- Table structure for table `a_1_2_2`
--


CREATE TABLE IF NOT EXISTS `a_1_2_2` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `answer_id` int(11) NOT NULL,
  `q_id` int(11) NOT NULL,
  `a_answer_number` int(11) NOT NULL,
  `a_answer_type` int(11) NOT NULL,
  `a_answer` varchar(11) NOT NULL,
  `a_answer_point` int(11) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `a_1_2_2`
--


