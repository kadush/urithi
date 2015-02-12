-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2014 at 09:43 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hp`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `project_id` int(11) NOT NULL AUTO_INCREMENT,
  `img` text NOT NULL,
  `title` text NOT NULL,
  `desc` text NOT NULL,
  `link` text NOT NULL,
  PRIMARY KEY (`project_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `img`, `title`, `desc`, `link`) VALUES
(1, 'images/links/eid.jpg', 'The Early Infant Diagnosis (EID)', 'a web-based and sms-enabled portal for the testing and posting of HIV/AIDS test results for Kenya’s National AIDS/STI Control Program (NASCOP). This system has been implemented and deployed in Kenya, Uganda, Malawi, Zimbabwe and Nigeria, with the destination being India.\r\n\r\nThis tool can be accessed at www.nascop.org/eid. User login credentials will be needed for more detailed and specific access.\r\n', 'http://nascop.org/eid'),
(2, 'images/links/adt.jpg', 'The Antiretroviral Dispensing Tool (ADT)', 'Further to the work done in the Early Infant Diagnosis (EID), ADT web-based systems was developed, tested and deployed to support the mothers and guardians of the infants that go through testing under the EID set up.\r\nIt is a tool that is used to manage prescriptions and manage the regimens the patients have been out on.\r\nADT is live and in use by a couple of Voluntary Testing Centres (VTCs) and health centres in the country.\r\n', '41.89.6.210/ADT'),
(3, 'images/links/idsr.png', 'Integrated Disease Surveillance and Response portal (IDSR) and mSOS', 'a mobile-enabled version of the system for the Division for Disease Surveillance and Response (DDSR) Unit of the Ministry of Health (Kenya). This portal is live in two counties, i.e. Busia and Kajiado and is used by clinical officers at over 50 facilities to report incidences for notifiable diseases.\r\n\r\n', 'http://nascop.org/idsr '),
(4, 'images/links/tb.jpg', 'The food fortification Monitoring and Evaluation tool for the Division of Nutrition and Dietetics, Ministry of Health (Kenya)', 'This web-based monitoring and evaluation tool is used as a means of monitoring food fortification efforts by the division as a means of improving the uptake of vitamins and micronutrients as a means of improving nutrition in the country. The tool is live and in use in Kenya.\r\nThis tool is not accessible publicly as it is deployed in their institutional intranet.\r\n', ''),
(5, 'images/links/hcmp.jpg', 'The Health Commodities Management Platform (HCMP)', 'a web-based supply-chain tool for the management of drug and pharmaceutical commodities at health facilities across different counties in Kenya. The tool is live in Nairobi, Taita-Taveta, Mombasa, Kilifi, Kwale and Lamu counties, with plans to deploy it to more counties.\r\nThe tool is publicly accessible via the URL health-cmp.or.ke. User login credentials are necessary for one to manipulate any data.\r\n', 'http://health-cmp.or.ke'),
(6, 'images/links/tb.jpg', 'The Lab Information Management System (LIMS) for the National Quality Control Lab (NQCL) and the Mission for Essential Drugs and Supplies (MEDS).', 'This is a web-based system that automates the lab processes in both sites in a bid to improve turn-around time and efficiency. Both systems are not accessible publicly as they are deployed on their respective intranets.', ''),
(7, 'images/links/mnch.png', 'Maternal Neonatal, Child Health and IMCI Follow-Up ', 'Monitors the capacity of a Health Facility to provide adequate care for both the mother and the child. This is done by checking for the availability and functionality of commodities, testing kits, equipment and supplies as well as assessing the proficiency of the Health Care Workers and how current the guidelines and policies used are.', 'http://mnchkenya.or.ke '),
(8, 'images/links/tb.jpg', 'IMCI Guide and Assessment', 'The Integrated Management of Childhood Infections is a guideline used by Health Care Workers in facilities to ensure that proper procedures are adhered to when caring for children. This involves identification, classification and treatment of symptoms.', ''),
(9, 'images/links/tb.jpg', 'Program Monitor Tool', 'This is an auditing tool that monitors all activities ongoing in the Essential Commodities Program (encompassing HCMP, MNCH Assessment, IMCI et al). It gives an overview of the current state of affairs and helps in decision making as well as planning for future interventions.', ''),
(10, 'images/links/cd4tz.png', 'CD4/Point-of-Care (PoC) System ', 'The CD4/PoC system is the tool used to manage HIV/AIDS patients’ appointments. The system captures their clinic visit history, their CD4 count and what regimen they have been put on (captured from ADT).\r\nThis system is live and in use in many health facilities in the country\r\n', 'http://cd4nacp.go.tz/cd4/');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `staff_id` int(11) NOT NULL AUTO_INCREMENT,
  `img` text NOT NULL,
  `fullname` text NOT NULL,
  `position` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `education` text NOT NULL,
  `jd` text NOT NULL,
  `twitter` text NOT NULL,
  `facebook` text NOT NULL,
  `google` text NOT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `img`, `fullname`, `position`, `email`, `phone`, `education`, `jd`, `twitter`, `facebook`, `google`) VALUES
(1, 'images/team/maingi.jpg', 'Nicodemus Maingi', 'Current and founding Director.\r\nLecturer, Faculty of information Technology, Strathmore University', 'nmaingi@strathmore.edu', '0721499437', 'Pursuing Ph. D. in Informatics at Strathmore University.\r\nHolds a Masters degree in Information Systems from the University of Nairobi, and a Bachelor of Science Degree from Egerton University, Njoro\r\n', 'Has been teaching, doing research and consultancy at Strathmore and at Strathmore Research and Consultancy Centre for over 15 years.s', 'maingi', 'Nicodemus Maingi', 'Nicodemus Maingi'),
(2, 'images/team/sheila.jpg', 'Sheila Mutheu', 'Co-Founder', 'smutheu@gmail.com', '254726416795', 'Bachelors Degree Holder - Business Information Technology (Strathmore University)\r\n', 'Analyst - Business Development & Technology', '', '', ''),
(3, 'images/team/tim.jpg', 'Tim Ngugi', 'Co-Founder', 'tngugi@gmail.com', '254725227833', 'Masters Degree Holder in Health Systems Management from (Kenya Methodist University-KEMU) <br><br> Bachelor Degree in Business Information Technology ( Strathmore University).\r\n', 'Analyst - Business Development & Technology', '', '', ''),
(4, 'images/team/rufus.jpg', 'Rufus Mbugua', 'Solutions Architect', 'mbuguarufus@gmail.com', '0721211763', 'Holds a Bachelor of Business Information Technology from Strathmore University.\r\n\r\nIs a Certified Information Systems Auditor and a candidate for Certification in System Security Audit and Management.\r\n', 'He is the Technical Lead Solution Architect for the Maternal and Neonatal Health works and Program Monitor program', 'Rufus Mbugua', 'Rufus Mbugua', 'Rufus Mbugua'),
(5, 'images/team/mureithi.jpg', 'Kelvin Mureithi', 'Solutions Architect', 'kelvinmwas@gmail.com', '0720167245', 'Holds a Bachelor of Business Information Technology from Strathmore University.\r\n\r\nIs a Certified Information Systems Auditor\r\n', 'He is the Technical Lead Solution Architect for the Health Commodities Management Platform (HCMP) works.', 'Kelvin Mureithi', 'Kelvin Mureithi', 'Kelvin Mureithi'),
(6, 'images/team/marete1.jpg', 'Kevin Marete', 'Solutions Architect', 'kevomarete@gmail.com', '0725102659', 'Holds a Bachelor of Business Information Technology from Strathmore University.\r\n\r\nIs a Certified Information Systems Auditor.\r\n', 'He is the Technical Lead Solution Architect for the Antiretroviral Dispensing Tool (ADT) works.', 'Kevin Marete', 'Kevin Marete', 'Kevin Marete'),
(7, 'images/team/simba.jpg', 'Oscar Simba', 'Solutions Architect', 'simbake2009@gmail.com', '072992876', 'He is in his 4th year of his  Bachelor of Business Information Technology degree at Strathmore University.', 'He is the Technical Lead Solution Architect for the e-IDSR and mSOS works.', 'Oscar Simba', 'Oscar Simba', 'Oscar Simba'),
(8, 'images/team/kadush.jpg', 'Elvis Muriithi', 'Solutions Architect', 'elvismuriithi@gmail.com', '0724690198', 'Holds a Bachelor of Business Information Technology from Strathmore University.', 'He is the Technical Lead Solution Architect for the National TB and Lung Disease Reference Lab.', 'Elvis Muriithi', 'Elvis Muriithi', 'Elvis Muriithi'),
(9, 'images/news/news3.jpg', 'Adams Johns', 'Solutions Architect', 'johnadams@gmail.com', '0713004221', 'Holds a Bachelor of Business Information Technology from Strathmore University.', 'He is the Technical Lead Solution Architect for the Division of Nutrition’s Monitoring and Evaluation works.', 'Adams Johns', 'Adams Johns', 'Adams Johns'),
(10, 'images/team/mitto.jpg', 'Kevin Nditika', 'Solutions Architect', 'mwangikevinn@gmail.com', '0723016811', 'He is in his 4th year of his  Bachelor of Business Information Technology degree at Strathmore University.', 'He is the Technical Lead Solution Architect for the CD4/PoC for Kenya and Tanzania.', 'Kevin Nditika', 'Kevin Nditika', 'Kevin Nditika'),
(11, 'images/team/kibaki.jpg', 'Watson Ndethi', 'Solutions Architect', 'ndethiw@gmail.com', '0788343205', 'Holds a Bachelor of Business Information Technology from Strathmore University.', 'He is the Joint-Technical Lead Solution Architect for the Lab Management Information System.', 'Watson Ndethi', 'Watson Ndethi', 'Watson Ndethi'),
(12, 'images/team/alphonce.jpg', 'Alphonce Ochieng', 'Solutions Architect', 'alpho07@gmail.com', '0715882227', 'Holds a Bachelor of Business Information Technology from Strathmore University.', 'He is the Joint-Technical Lead Solution Architect for the Lab Management Information System.', 'Alphonce Ochieng', 'Alphonce Ochieng', 'Alphonce Ochieng'),
(13, 'images/team/ann.jpg', 'Anne Chemutai', 'Solutions Architect', 'annchemu@gmail.com', '0726763026', 'Holds a Bachelor of Business Information Technology from Strathmore University.\r\n\r\nCurrently pursuing her Master Degree in Technology and Innovation at Strathmore University.', 'She is the Technical Lead Solution Architect for the Rapid Test Kits program for NASCOP.', 'Anne Chemutai', 'Anne Chemutai', 'Anne Chemutai'),
(14, 'images/team/emmie.jpg', 'Emmy Chemutai', 'Solutions Architect', 'cheriuyot@gmail.com', '0717406871', 'Holds a Bachelors Degree in Computer Science from Egerton University, Njoro.', 'She is the Assistant Solution Architect for the Maternal Child Health program.', 'Emmy Chemutai', 'Emmy Chemutai', 'Emmy Chemutai'),
(15, 'images/team/ojenge.jpg', 'Collins Ojenge', 'Solutions Architect', 'collinsojenge@gmail.com', '0723722204', 'Holds a Bachelor of Business Information Technology from Strathmore University.', 'He is the Assistant Solution Architect for the Health Commodities Management Program', 'Collins Ojenge', 'Collins Ojenge', 'Collins Ojenge'),
(16, 'images/news/news3.jpg', 'Nicholas Mukiri', 'Solutions Architect', 'nielsmuk@gmail.com', '0726816007', 'Holds a Bachelor of Business Information Technology from Strathmore University.', 'He is the Assistant Solution Architect for the CD4/PoC Program for NASCOP.', 'Nicholas Mukiri', 'Nicholas Mukiri', 'Nicholas Mukiri'),
(17, 'images/team/gauthier.jpg', 'Abdala Gauthier', 'Solutions Architect', 'gauthierabdala@gmail.com', '0724945040', 'Holds a Bachelor of Business Information Technology from Strathmore University.\r\n\r\nPursuing a Certification for Information Systems Auditor (CISA)', 'He is the Assistant Solution Architect for the Antiretroviral Dispensing Tool (ADT) for NASCOP.', 'Abdala Gauthier', 'Abdala Gauthier', 'Abdala Gauthier'),
(18, 'images/team/evans.png', 'Evans Gacheru Munene', 'Solutions Architect', 'gacheruevans0@gmail.com', '0788401270', 'Holds a Bachelor of Business Information Technology from Strathmore University.', 'He is the Technical Lead Solution Architect for the Quality Assurance Management Laboratory System for the Mission for Essential Drugs and Supplies Company Based in Machakos County.', 'GacheruEvans', 'Evans Gacheru Munene', 'Evans Gacheru'),
(19, 'images/team/news3.jpg', 'Ndirangu Waweru', 'Assistant Solutions Architect - MNCH', 'ndiranguwaweru@gmail.com', '0726133144', 'Holds a Bachelor of Business Information Technology from Strathmore University.', 'He is the Assistant Solution Architect for the Maternal Child Health program.', 'biggie_1969', 'ndiranguwaweru', 'ndiranguwaweru'),
(20, 'images/team/news3.jpg', 'Omondi Kevin Ochieng''', 'Intern - CD4', 'kevochi09@gmail.com', '0713049852', 'He is in his 4th year of his Bachelor of Science in Informatics degree at Strathmore University.', 'He is an intern working for the CD4/PoC for Kenya program', 'Lord_Audrey', 'omondi.kevinochieng', 'Omondi kevin'),
(21, 'images/team/otalo.jpg', 'Otaalo John Chrispine', 'Intern - MNCH & Program Monitor', 'chris@cotaalo.com', '0725160399', 'He is in his 2nd year of his Bachelor of Science in Informatics degree at Strathmore University.', 'He is an intern working for the MNCH & Program Monitor programs', 'johnchrizota', 'Chris Otaalo', 'JOHN OTAALO'),
(22, 'images/team/adima.jpg', 'Adima Mesa', 'Intern - HCMP', 'mesadima@gmail.com', '0714443320', 'He is in his 2nd year of his Bachelor of Science in Informatics degree at Strathmore University.', 'He is an intern working for the Health Commodities Management Program ', 'AdimaM', 'Adima Mesa', 'Adima Mesa'),
(23, 'images/team/seth.jpg', 'Richard Seth Karsan', 'Intern - HCMP ', 'karsanrichard@gmail.com', '0707463571', 'He is in his 2nd year of his Bachelor of Science in Informatics degree at Strathmore University.', 'He is an intern working for the Health Commodities Management Program ', 'karsanrichard', 'Seth Karsan', 'Richard Seth'),
(24, 'images/team/Hawi.jpg', 'Brian Hawi Odhiambo', 'Intern - CD4', 'brianhawi92@gmail.com', '0727044366', 'He is in his 4th year of his Bachelor of Science in Informatics degree at Strathmore University.', 'He is an intern working for the CD4 for Kenya program', 'Hawi_ceaser', 'Brian Hawi', 'Brian Hawi'),
(25, 'images/team/macharia.jpg', 'Kariuki John Macharia', 'Intern - TB', 'Machariajohn20@gmail.com', '0720986582', 'He is in his 4th year of his  Bachelor of Business Information Technology degree at Strathmore University.', 'He is the Intern for the National TB and Lung Disease Reference Lab project.', 'the_maverick254', 'John Mash Macharia', 'John Macharia'),
(26, 'images/team/titus.jpg', 'Titus Tunduny', 'Intern - RTK', 'ttundun@gmail.com', '0728778002', 'He is in his 4th year of his  Bachelor of Business Information Technology degree at Strathmore University.', 'He is the Intern for the Rapid Test Kits program for NASCOP', 'cossboss', 'Titus Tunduny', 'Titus Tunduny'),
(27, 'images/team/news3.jpg', 'Brian Barmao', 'Intern - Disease Response And Surveillance', 'bryanbarmao@gmail.com', '0729645857', 'He is in his 4th year of his Bachelor of Science in Informatics degree at Strathmore University.', 'He is the Intern for Disease Response And Surveillance program', 'bryankip', 'Brian Barmao', 'Brian Barmao'),
(28, 'images/team/jepto.jpg', 'Jeptoo Kipkech', 'Intern - MEDS', 'jeptella@gmail.com', '0704835100', 'She is in his 4th year of his Bachelor of Science in Informatics degree at Strathmore University.', 'She is the Intern for the Management Laboratory System for Mission for Essential Drugs and Supplies Company ', 'JMaryJane', 'Jeptoo Kipkech', 'Jeptoo Kipkech'),
(29, 'images/team/eunice.jpg', 'Eunice Engefu Manyasi', 'Intern - ADT', 'eunismanyasi@gmail.com', '0712298815', 'She is in his 4th year of his Bachelor of Science in Informatics degree at Strathmore University.', 'She is the Intern for the Antiretroviral Dispensing Tool (ADT) works.', 'EEngefu', 'Eunice Manyasi', 'Eunice Manyasi'),
(30, 'images/team/joy.jpg', 'Joy Wambui Mungai', 'Intern - ADT', 'ijoy.mungai@gmail.com', '0713916741', 'She is in his 4th year of his Bachelor of Science in Informatics degree at Strathmore University.', 'She is the Intern for the Antiretroviral Dispensing Tool (ADT) works.', 'iwambuijoy', 'Wambui Mungai', ''),
(31, 'images/team/willy.jpg', 'Willy Mareka Michael', 'Intern - MNH & Program Monitor', 'marekawilly@gmail.com', '0714135480', 'He is in his 2nd year of his Bachelor of Science in Informatics degree at Strathmore University.', 'He is an intern working for the Maternal and Neonatal Health works and Program Monitor program', 'MarekaWilly ', 'Michael Mareka', 'Willy Mareka'),
(32, 'images/team/oscar.jpg', 'Oscar Gichohi', 'Intern - CD4 (Tz)', 'shohiek@gmail.com', '0718715998', 'He is in his 4th year of his Bachelor of Science in Informatics degree at Strathmore University.', 'He is an intern working for the CD4 for Tanzania program', '', 'Oscar Gichohi Keginski', ''),
(33, 'images/team/joshua.jpg', 'Joshua Bakasa', 'Intern - CD4 (Tz), EID', 'baksajoshua09@gmail.com', '0725455925', 'He is in his 2nd year of his Bachelor of Science in Informatics degree at Strathmore University.', 'He is an intern working for the CD4 for Tanzania program And Early Infant Diagnosis', '', 'Joshua Bakasa', 'Joshua Bakasa'),
(34, 'images/team/dan.jpg', 'Daniel Warui', 'Intern - IMCI (Android Version)', 'waruindungu@gmail.com', '0706129749', 'He is in his 1st year of his  Bachelor of Computer Science degree at The University of Nairobi.', 'He is an Intern working for the IMCI project', 'warui_ndungu', 'Ndungu Warui Ndungu', 'Daniel Warui');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
