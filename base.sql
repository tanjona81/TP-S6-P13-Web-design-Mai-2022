use rechauffement;

create table admin(
	id int primary key auto_increment,
	nom VARCHAR(150),
	mdp VARCHAR(150)
);

insert into admin values(null,'admin','admin');

create table actualite(
	id int primary key auto_increment,
	titre VARCHAR(1000),
	description text,
	image VARCHAR(250),
	dateActu date
);

insert into actualite values(null,'la limite des +1,5 C de rechauffement sera probablement atteinte ou depassee d ici 5 ans !',
	'L OMM precise que l annee 2022 s annonce plus seche que la normale 1991-2020 en Europe du Sud et dans le sud-ouest des etats-Unis et du Canada. Les conditions meteo de 2022 s annoncent par contre plus humides que la moyenne en Europe du Nord, au Sahel, au nord-est du Bresil et en Australie (deja touchee par des inondations historiques). En ce qui concerne les prochains etes de la periode 2022-2026, les previsions climatiques s orientent vers une secheresse recurrente en Amazonie et des precipitations excedentaires au Sahel, au nord de l Europe, en Alaska et au nord de la Siberie. Concernant les prochains hivers des cinq annees a venir, les modeles climatiques suggerent des precipitations superieures a la moyenne dans les tropiques, et des inferieures dans les zones sub-tropicales.

Les previsions pour la periode de 2022 a 2026 oscillent exactement entre +1,1 et +1,7 C de rechauffement planetaire. L anomalie chaude de temperature devrait etre au moins trois fois plus importante en Arctique que l anomalie qui sera atteinte sur l ensemble du Globe',
	'images/actualite/15degre.jpg',
	'2022-05-11');
insert into actualite values(null,'La Nouvelle-Zelande est confrontee a une montee des eaux deux fois plus rapide que prevu',
'Les donnees recueillies le long du littoral en Nouvelle-Zelande ont montre que certaines zones s enfoncent deja de trois a quatre millimetres par an, accelerant le peril tant redoute. Les projections, qualifiees d « un peu terrifiantes » par un expert, sont le fruit d un vaste programme de recherche sur cinq ans -- baptise NZ SeaRise -- effectue par des dizaines de scientifiques, locaux et internationaux et finance par le gouvernement.

Selon leurs previsions, les autorites disposent de moins de temps que prevu pour planifier la maniere de s adapter aux consequences du changement climatique, notamment une relocalisation des habitants vivant le long des côtes.',
	'images/actualite/eau.jpeg',
	'2022-05-03');
insert into actualite values(null,'La secheresse accrue dans les tropiques ',
'On remarque ce phenomene depuis le XXe siecle. Des zones du monde s assechent et on peut observer les etendues d eau sur les continents en subir les effets. Par exemple la mer Morte, dont l eau se retire d environ un metre tous les ans, a perdu au total un tiers de sa surface depuis 1960 et est desormais menacee de disparition. Et ces problemes se poursuivent et deviennent plus graves, a l instar du lac de Suesca (Colombie) ou du lac de Sawa (Irak) qui se sont retrouves recemment completement asseches, respectivement en 2021 et 2022.',
	'images/actualite/secheresse.jpg',
	'2022-04-03');

create table cause(
	id int primary key auto_increment,
	titre VARCHAR(500),
	description text,
	image VARCHAR(250)
);

insert into cause values(null,'Production d energie',
	'Une grande partie des emissions mondiales de gaz a effet de serre provient de l utilisation de combustibles fossiles — tels que le charbon, le petrole et le gaz naturel — pour produire de l electricite et de la chaleur. La production d electricite depend encore majoritairement des combustibles fossiles. Seul un quart de notre electricite provient de sources eoliennes, solaires et d autres sources renouvelables.',
	'images/cause/energetique.jpg');
insert into cause values(null,'Deforestation',
	'La deforestation au profit d exploitations agricoles, de pâturages ou autre, rejette egalement des emissions de gaz a effet de serre, puisque les arbres, lorsqu ils sont abattus, liberent le carbone qu ils ont stocke. La destruction des forets, qui absorbent le dioxyde de carbone, limite egalement la capacite de la nature a empecher les emissions de gaz d entrer dans l atmosphere.',
	'images/cause/defo.jpg');
insert into cause values(null,'Utilisation des transports',
	'La plupart des voitures, camions, bateaux et avions fonctionnent aux combustibles fossiles. Par consequent, les transports contribuent largement a la production de gaz a effet de serre, en particulier les emissions de dioxyde de carbone. Les vehicules routiers sont responsables de la majeure partie de ces emissions, mais celles des navires et des avions ne cessent de croître.',
	'images/cause/transport.jpg');
insert into cause values(null,'Surconsommation',
	'Notre maison, notre consommation d energie, nos deplacements, notre alimentation et la quantite de dechets que nous jetons contribuent tous aux emissions de gaz a effet de serre. Il en va de meme pour la consommation de biens, tels que les vetements, les appareils electroniques et les matieres plastiques.',
	'images/cause/consomation.jpg');

create table consequence(
	id int primary key auto_increment,
	titre VARCHAR(1000),
	description text,
	image VARCHAR(250)
);

insert into consequence values(null,'Hausse des temperatures',
	'Dans la quasi-totalite des regions terrestres, les journees tres chaudes et les vagues de chaleur se multiplient. L annee 2020 a ete l une des plus chaudes jamais enregistrees. La hausse des temperatures provoque une augmentation des maladies liees a la chaleur et peut rendre le travail et les deplacements plus difficiles. En outre, les incendies de foret demarrent plus facilement et se propagent plus vite lorsque les temperatures sont plus elevees.',
	'images/consequence/temperature.jpg');
insert into consequence values(null,'Accroissement des secheresses',
	'De plus en plus de regions sont confrontees a une penurie d eau. Les secheresses peuvent provoquer des tempetes de sable et de poussiere destructrices, capables de deplacer des milliards de tonnes de sable a travers les continents. Avec la desertification, les terres cultivables voient egalement leur surface se reduire. Aujourd hui, de nombreuses personnes sont exposees au risque de manquer d eau.',
	'images/consequence/temperature.jpg');
insert into consequence values(null,'Rechauffement et montee des oceans',
	'Les oceans absorbent une grande partie de la chaleur due au rechauffement de la planete. Cela a pour effet de provoquer la fonte des calottes glaciaires et l elevation du niveau des mers, menaçant ainsi les communautes côtieres et insulaires. Les oceans absorbent egalement le dioxyde de carbone contenu dans l atmosphere. Or, l augmentation du dioxyde de carbone rend l ocean plus acide, ce qui met en danger la vie marine.',
	'images/consequence/eau.jpg');
insert into consequence values(null,'Penurie alimentaire',
	'La progression de la faim et de la malnutrition dans le monde s explique notamment par les changements climatiques et l augmentation des phenomenes meteorologiques extremes. Les ressources halieutiques, les cultures et le betail sont exposes au risque de destruction ou de perte de productivite. En outre, le stress thermique peut entraîner une diminution des ressources en eau et des prairies pour le pâturage.',
	'images/consequence/aliment.jpg');

create table solution(
	id int primary key auto_increment,
	titre VARCHAR(1000),
	description text,
	image VARCHAR(250)
);

insert into solution values(null,'economiser l energie a la maison',
	'Notre electricite et notre chauffage proviennent en grande partie du charbon, du petrole et du gaz. Il est possible de reduire sa consommation d energie en diminuant le chauffage et la climatisation, en optant pour des ampoules LED et des appareils electriques a faible consommation, en lavant son linge a l eau froide ou en le suspendant pour le faire secher au lieu d utiliser un seche-linge.',
	'images/solution/maison.jpg');
insert into solution values(null,'Reduire, reutiliser, reparer et recycler',
	'Les appareils electroniques, les vetements et tous les autres biens que nous achetons generent des emissions de carbone a chaque etape de leur production, de l extraction des matieres premieres a la fabrication et au transport des marchandises jusqu au lieu de vente. Pour proteger notre climat, achetez moins, choisissez des articles d occasion, reparez tout ce que vous pouvez et recyclez.',
	'images/solution/recycle.jpg');
insert into solution values(null,'Passer a un vehicule electrique',
	'En cas d achat d une nouvelle voiture, envisagez d opter pour un modele electrique. Ces modeles sont de plus en plus nombreux et de moins en moins chers sur le marche. Meme si elles fonctionnent toujours grâce a de l electricite produite a partir de combustibles fossiles, les voitures electriques contribuent a reduire la pollution atmospherique et liberent beaucoup moins d emissions de gaz a effet de serre que les vehicules a moteur essence ou diesel.',
	'images/solution/vehicule.jpg');
insert into solution values(null,'eviter le gaspillage alimentaire',
	'Lorsque l on jette de la nourriture, on gaspille egalement les ressources et l energie qui ont ete utilisees pour la cultiver, la produire, l emballer et la transporter. Par ailleurs, une fois dans un site d enfouissement des dechets, les aliments se decomposent et produisent du methane, un puissant gaz a effet de serre. Veillez donc a consommer les aliments que vous achetez et a composter vos dechets.',
	'images/solution/food.jpg');
