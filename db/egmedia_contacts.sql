CREATE DATABASE egmedia_contacts;

USE egmedia_contacts;

DROP TABLE IF EXISTS `tbl_contacts`;

CREATE TABLE `tbl_contacts` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `subject` varchar(70) NOT NULL,
  `message` varchar(500) NOT NULL,
  `sentDate` datetime NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `tbl_contacts` (`contact_id`, `firstname`, `lastname`, `email`, `phone`, `subject`, `message`, `sentDate`) VALUES
(1, 'Mia', 'Yang', 'miay@hotmail.com', '(650) 798-9814', 'The Tyranny of E-mail', 'The first e-mail was sent less than 40 years ago. In 2007 the worlds billion PCs exchanged 35 trillion e-mails.', '2019-06-22 23:50:46'),
(2, 'Peter', 'White', 'whit@gmail.com', '(202) 539-1401', 'Focusing Email Messages', 'An email message is generally limited to one idea rather than addressing several issues. If you address more than one topic in a single email message, chances are the recipient will forget to respond to all points discussed. Discussing one topic allows you to write a descriptive subject line, and the receiver can file the single subject message in a separate mailbox if desired. If you must send a lengthy message, divide it into logical sections for easy comprehension.\r\n', '2019-06-22 23:57:54'),
(3, 'Irina', 'Taylor', 'taylor@hotmail.com', '(250) 543-4587', 'Editing Email Messages', 'Edit all your emails for proper grammar, punctuation and spelling.\r\n\r\nNothing discredits you faster than sloppy email. Yes, you have spellcheck, I know, but not everyone hooks it up. Proofread. Nothing says I am not a business professional, faster or more loudly than poor composition or writing skills.\r\n', '2019-06-22 23:59:49'),
(4, 'Bob', 'Lee', 'lee@gmail.com', '(480) 455-7895', 'Distributing Email Messages', 'In the workplace, email is a critical communication tool, so it is common for an email message . . . to be distributed far beyond its intended range, sometimes causing embarrassment (or worse) for the sender.', '2019-06-23 00:01:05');
