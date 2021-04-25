-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2021 at 08:45 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pd_uspon`
--

-- --------------------------------------------------------

--
-- Table structure for table `guides`
--

CREATE TABLE `guides` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `bio` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `number` int(255) NOT NULL,
  `mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guides`
--

INSERT INTO `guides` (`id`, `name`, `slug`, `photo`, `bio`, `city`, `number`, `mail`) VALUES
(1, 'Srđan Marković', 'srdjan_markovic', 'srdjan_markovic.jpg', 'Aenean et sodales mauris, eu feugiat lorem. Praesent eget semper lectus, eget laoreet tortor.<br><br>\r\n\r\nAliquam vestibulum orci ullamcorper justo pretium, ut cursus dui bibendum. In eleifend orci ut dolor ultrices pharetra. Ut laoreet quis mi eu imperdiet. Donec convallis eleifend efficitur. Nam varius lorem sed augue auctor mollis. Nam volutpat elementum lacinia. Cras fermentum leo pulvinar sapien auctor vestibulum. Cras vitae rutrum turpis.<br><br>\r\n<b>\r\nUt laoreet quis mi eu imperdiet. Aliquam vestibulum orci ullamcorper justo pretium, ut cursus dui bibendum. In eleifend orci ut dolor ultrices pharetra.</b>', 'Beograd', 64559598, 'srdjanm@uspon.rs'),
(2, 'Svetlana Rubov', 'svetlana_rubov', 'svetlana_rubov.jpg', ' Quisque quis magna nisi. Donec finibus felis at diam malesuada volutpat. Integer accumsan ante in iaculis pharetra. Praesent eget molestie ligula, id lobortis nisi. Morbi eget urna convallis, venenatis ex id, pharetra risus. Nullam ut nibh vel enim suscipit interdum. Duis eget magna purus.<br><br>\r\n\r\nNullam sagittis urna leo, non vehicula odio feugiat eu. Praesent ipsum dolor, lacinia vitae eros in, iaculis sollicitudin nisi. Nulla facilisi.<br><br>\r\n<b> Proin bibendum, nisi eget consectetur dignissim, arcu tellus convallis magna, at molestie mi lorem eget ipsum.</b>', 'Beograd', 65998565, 'svetlanar@uspon.rs'),
(3, 'Miloš Petrović', 'milos_petrovic', 'milos_petrovic.jpg', ' In auctor eu mauris id aliquet. Suspendisse potenti. Duis quis orci in enim maximus tristique vel a turpis. Sed semper ante lectus, eget imperdiet libero facilisis ut. In facilisis, enim in dapibus placerat, purus ex tempus quam, pretium ultricies nisl dui consectetur nisl. In a finibus purus. Integer in venenatis odio, ac dapibus enim. Maecenas lobortis, ligula tristique eleifend porta, felis enim congue libero, non porta neque metus a velit. Curabitur euismod luctus orci, et pulvinar urna dignissim ut.\r\n<br><br>\r\n<b>\r\nProin eget semper mauris. Phasellus ac vehicula nisl, sit amet auctor magna. Maecenas consequat ex quam, nec aliquet risus tincidunt ut. Nullam euismod odio nunc, eu luctus libero pretium lobortis. Morbi tristique purus ac nisi malesuada, vitae lobortis velit congue.</b>', 'Niš', 63889982, 'milosp@uspon.rs'),
(4, 'Tamara Crnomarković', 'tamara_crnomarkovic', 'tamara_crnomarkovic.jpg', ' Suspendisse leo ipsum, ornare quis ornare in, sollicitudin et leo. Curabitur placerat sodales tristique. Morbi varius imperdiet risus sit amet vestibulum. Donec pretium nulla diam, eu suscipit libero malesuada eu. Quisque maximus augue non elit luctus euismod. Aenean ut neque ut nulla mattis scelerisque. In consequat finibus erat eu malesuada. Vivamus eu lacinia nisl. Pellentesque gravida augue nec neque mollis porta. Fusce sollicitudin interdum facilisis.\r\n<br><br>\r\nIn auctor eu mauris id aliquet. Suspendisse potenti. Duis quis orci in enim maximus tristique vel a turpis.\r\n<br><br>\r\n<b> Sed semper ante lectus, eget imperdiet libero facilisis ut. In facilisis, enim in dapibus placerat, purus ex tempus quam, pretium ultricies nisl dui consectetur nisl.</b>', 'Zaječar', 64223585, 'tamarac@uspon.rs'),
(5, 'Dragan Aleksić', 'dragan_aleksic', 'dragan_aleksic.jpg', 'Proin eget semper mauris. Phasellus ac vehicula nisl, sit amet auctor magna. Maecenas consequat ex quam, nec aliquet risus tincidunt ut. Nullam euismod odio nunc, eu luctus libero pretium lobortis. Morbi tristique purus ac nisi malesuada, vitae lobortis velit congue. Proin cursus, nibh vitae cursus commodo, massa lectus sodales nisi, ut tristique velit odio vel dolor. Nulla in aliquam est.\r\n<br><br>\r\n<b> Donec ullamcorper orci vel convallis laoreet. In faucibus blandit dolor id posuere. Vestibulum orci elit, sodales vitae ante ut, aliquam varius risus. Suspendisse potenti. </b>\r\n<br><br>\r\nVestibulum aliquam molestie lectus sed vestibulum. Aliquam ac eros ipsum. Maecenas rutrum purus eu magna iaculis blandit. ', 'Zaječar', 65939622, 'dragana@uspon.rs');

-- --------------------------------------------------------

--
-- Table structure for table `travels`
--

CREATE TABLE `travels` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `date` date NOT NULL,
  `guide_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `travels`
--

INSERT INTO `travels` (`id`, `heading`, `body`, `date`, `guide_id`) VALUES
(1, 'Fruska Gora, Zmajevac (430m)', 'Komunalne službe ne odlaze u prirodu, molimo vas da vaše smeće ponesete sa sobom. Čuvamo i volimo našu zemlju! Saznaj više.\r\n<br><br>\r\nNa najvišim delovima Fruške gore nalaze se mnogobrojna izletišta koja s prvim danima proleća pa sve do početka hladnijih jesenjih dana postaju odredišta mnogih zaljubljenika u prirodu. Jedno od tih je i izletište Zmajevac, sa kog se pruža jedan od najlepših pogleda na Srem, posebno u večernjim satima kada počinju da se pale ulične svetiljke u obližnjim mestima. Ovo izletište je opremljeno mnogobrojnim drvenim klupama i stolovima, od kojih su neki natkriveni kao pravi letnjikovci i potpuno usklađeni s okruženjem. Postoje i ozidana ložišta koja olakšavaju pripremu roštilja.\r\n<br><br>\r\nZmajevac se nalazi na raskršću Partizanskog puta i puta Vrdnik–Rakovac. Nedaleko su i Iriški venac i Ledinačko jezero do kojih se može stići šumskim putem.', '2021-01-03', 2),
(2, 'Bukulja (696m)', 'Planina Bukulja, nova zvezda domaće serije Kalkanski krugovi, sve više privlači izletnike, a posebno turiste koji žude za novim otkrićima. Kako nas je pandemija usmerila na istraživanje Srbije, veliki broj turista u želji za prirodom i aktivnim odmorom svoj dnevni odmor provodi na lepotici Šumadije, planini Bukulja.\r\n <br><br>\r\nNa Bukulji se nalaze objekti izgrađeni krajem 20. veka i uglavnom su to vikendice. Od prošle godine nekoliko vikendica je kategorisano i rade sa turistima. Takođe, na vrhu planine krajem 2020. otvoren je rekonstruisan i dograđen Planinarski dom i sada nosi naziv Restoran Bukulja. Iz Turističke organizacije Opštine Aranđelovac navode da im je želja da se ova planina u turističkoj ponudi istakne zaštitom prirode.\r\n \r\nU planu: nacionalni park Bukulja \r\n- Planina Bukulja nije lokacija za izgradnju velikih kompleksa i za sada naša želja je da se u turističkoj ponudi istaknemo time što smo uspeli da zaštitimo narušavanje prirodnog ambijenta. Udaljenost centra Aranđelovca od vrha planine Bukulje je samo 15 minuta vožnje, a sreću imamo i u tome što saobraćaj na samoj planini nije tranzitni, pa se na nju dovoze isključivo izletnici. Naša želja je da se i u budućnosti planina Bukulja zaštiti kao nacionalni park i time zaustave sve neplanske radnje koje proističu posle ekspanzije određene turističke destinacije - ističu iz Turističke organizacije.\r\n <br><br>\r\nBukulja poseduje obeležene pešačke staze - staze zdravlja, izvore vode, par kategorisanih apartmana, dva jezera na kojima je zabranjeno kupanje jer se Aranđelovac snadbeva pijaćom vodom sa njih, međutim, izlet i fotografisanje su dozvoljeni. Uz usluge Konjičkog kluba, lepote Bukulje možete upoznati kroz jahanje.\r\n <br><br>\r\nNa vrhu se nalaze kafić i restoran, kao i osmatračnica visoka 19 metara sa koje se pruža pogled na čitavu Šumadiju.', '2021-01-05', 1),
(3, 'Kosmaj - Beli Kamen (546m), Košutica (463m), manastir Pavlovac, Kasteljan i Tresije', 'Posle Avale, Kosmaj je druga planina najbliža Beogradu. Udaljen je 60 km od glavnog grada. Ova tura je, zapravo, staza Gorštaka, akcija koja se izvodi jednom godišnje i okuplja veliki broj planinarskih klubova iz Srbije.\r\n<br><br>\r\nPočetak ove kružne staze je kod manastira Pavlovac, u selu Koraćica. Do manastira se dolazi autoputem Beograd-Niš, sa koga se isključujete kod skretanja za Mladenovac i Aranđelovac. Kada stignete u Mladenovac, pratite putokaze do manastira.\r\n<br><br>\r\nManastir Pavlovac osnovao je despot Stefan Lazarević, 1425. godine. Posvećen je Svetom Nikoli. Malo iznad manastira kreće markirana planinarska staza. Ali, tu kreću i prvi problemi.\r\n<br><br>\r\nNakon čitavih 200 m, dolazi se do jedne zelene kapije. Zaobiđite je sa leve strane. Ovde lupam prvi minus onome ko je obeležavao stazu.', '2021-02-02', 3),
(4, 'Subotička peščara, jezero Tresetište', 'Ovo područje ima karakter šumo-stepe, sa šumskim kompleksima, većinom antropogenog porekla. Prirodna vrednost je uslovljena karakterom i mozaičnošću staništa, među kojima peščarska, stepska i močvarna, daju osnovni pečat predelu sa visokim stepenom biodiverziteta. Najznačajnija su vlažna staništa formirana na podlozi nizijskog treseta u dolini rečice Kireš, koja se smatraju najređim i najugrožnijim staništima u Evropi i svetu.\r\n<br><br>\r\nMeđu očuvanim prirodnim retkostima, mora se pomenuti reliktna šumo-stepska biljka – šafranjika, koja je sinonim za floru Subotičke peščare, s obzirom da je tu njeno jedino nalazište u Vojvodini i Srbiji. Ukupan broj zabeleženih vrsta ptica na području iznosi čak 170 vrsta, što je rezultat velike raznovrsnosti staništa.\r\n<br><br>\r\nZabeleženo je prisustvo retke vrste glodara – vojvođanskog slepog kučeta, koja svoj život provodi pod zemljom, u sistemu hodnika, u potrazi za hranom – korenjem trava, rizomima i lukovicama. Ova vrsta je još pre samo sto godina bila široko rasprostranjena u Vojvodini, ali pretvaranjem izvornih stepa u njive, njen areal se izuzetno smanjio.\r\n<br><br>\r\nPredeo izuzetnih odlika Subotička peščara zaštićen je od 2003. godine i svrstan u II kategoriju zaštite, kao zaštićeno dobro od nacionalnog značaja. Zaštitom je obuhvaćena površina od 5370 hektara + 2773 hektara zaštitne zone.\r\n<br><br>\r\nDelimično su sačuvane izvorne predeone karakteristike, nastale u interakciji čoveka i prirode, a na području i njegovom neposrednom okruženju zadržali su se neki oblici tradicionalnog privređivanja i života, kao i pojedinačni salaši.', '2021-02-06', 2),
(5, 'Sokolske planine (973m)', 'Planina Rožanj pripada Sokolskim planinama i nalazi se u blizini varošice Pecke. Od Beograda je udaljena oko 130 km. Najkraći put je Ibarskom magistralom, do Valjeva. U Valjevu se skreće na put za Ljuboviju, koji dalje vodi preko Suvodanja, do Pecke. Od Beograda do Valjeva ima oko 100 km i još 30 km do Pecke, što je oko 2-2,5 sata vožnje. Kada se prođe Pecka, nakon 10-15 minuta vožnje, dolazi se do prevoja Proslop, odakle počinje staza za Rožanj. Pored magistralnog puta, sa desne strane, postoji crvena tabla, sa natpisom “Rožanj“, koja označava početak staze. Staza je dobro markirana, tako da ne postoji mogućnost da se zaluta. ', '2021-01-14', 2),
(6, 'Povlen, taorska vrela', 'Taorska vrela su kaskadni slapovi koji se nalaze na padinama planine Povlen u blizini Valjeva. Izviru u selu Donji Taor i predstavljaju spomenik prirode. Na ovim izvorima koji su bili prebogati vodom, nalazilo se čak 12 vodenica sve do 80-ih godina prošlog veka kada se voda iz ovog izvora preusmerila za grad Kosjerić. Na taj način se kapacitet vode smanjio i nažalost, narušena je njihova prirodna lepota. Nekada je izvor vode izbijao iz pećine za koji kažu da se nije mogao opisati rečima sve dok tok vode nije preusmeren. Danas su tu samo dve vodenice, od kojih je jedna obnovljena i radi, a druga je zarasla u mahovinu i prepuštena zubu vremena. ', '2021-04-10', 4),
(7, 'Maljen, Divčibare (980 m), Crni vrh (1096 m)', 'Divčibare su poznato turističko mesto koje se nalazi četrdesetak kilometara od grada Valjeva. Divčibare su deo planine Maljen. Zapravo, Divčibare su visoravan koja se nalazi na 980 m.n.v.\r\n<br><br>\r\nOd Beograda do Divčibara ima oko 125 km. Putuje se ibarskom magistralom do skretanja za Valjevo. Sa magistralnog puta koji vodi prema Valjevu, skreće se levo prema Mionici. Odatle se prate putokazi do 20 km udaljenih Divčibara.\r\n<br><br>\r\nUspon do Crnog vrha počinje iz centra Divčibara. Na Crnom vrhu se nalazi i skijaška staza. Postoje neki putokazi od centra do Crnog vrha, ali su prilično nejasni. Najbolje je kolima otići do vile „Vila“, tu se parkirati i krenuti na uspon. Kada dolazite iz pravca Mionice, prođite centar Divčibara i nakon 200 m skrenite levo na asfaltni put, prema „Markovom konaku“ i vili „Vila“. Od vile „Vila“, pešice nastavite asfaltnim drumom još 100 m i onda skrenite desno. Malo pre skretanja, videćete u šumi putokaz ka ski stazi. ', '2021-01-09', 4),
(8, 'Homoljske planine (Zman 607 m)', 'Drugi poznati deo pećine su Ponorske dvorane i potrebno da se prođe kroz uzani prolaz pod nazivom Dveri da se dođe do njih. To je pregradni draperijski zid, koji podseća na oltarske dveri. Nekada davno su Arena i Ponorska dvorana bile jedan entitet, ali ih je priroda pregradila draperijskim zidom. Međutim, kao da je mislila na budućnost ove pećini, ona je ostavila taman toliki prolaz da se napravi turistička staza. Na jednom kraju dvorane se nalazi stalagmit Pećinska jelka, koja zaista liči na okamenjenu jelku. Treća dvorana je Andezitska dvorana koja ima kružnu stazu i krasi je snežno beli tavanički nakit.', '2021-04-02', 5),
(9, 'Brdo Gorica, tvrđava Ram', 'Nalazi se između sela Zatonja i Rama na nadmorskoj visini od 282m. Ovo mesto obiluje vrlo interesantnim prirodnim odlikama. Blizina Dunava koji je presekao Karpate i otvorio prostor od Panonske nizije do Mediterana, kao i visina ovog brda uslovili su česte i snažne vetrove koji se često smenjuju, a od kojih su najpoznatiji Košava i Severac poznat i kao Gornjak. Ovakvo strujanje vetrova stvorilo je idealne uslove za neke ekstremne sportove, kao što je paraglajding.\r\n\r\nZaljubljenike u ovaj sport najčešće možemo sresti u proleće i jesen kada su vetrovi najsnažniji. Paraglajderi dolaze sami ili u grupama i medjusobno preporučuju ovo mesto, sa kako kažu „fantastičnim vetrom za njihova krila“.', '2021-04-07', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guides`
--
ALTER TABLE `guides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travels`
--
ALTER TABLE `travels`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guides`
--
ALTER TABLE `guides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `travels`
--
ALTER TABLE `travels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
