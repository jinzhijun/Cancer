-- MySQL dump 10.13  Distrib 5.6.25, for Linux (x86_64)
--
-- Host: localhost    Database: cancer
-- ------------------------------------------------------
-- Server version	5.6.25

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `sw_access`
--

DROP TABLE IF EXISTS `sw_access`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sw_access` (
  `role_id` smallint(6) unsigned NOT NULL,
  `node_id` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) NOT NULL,
  `module` varchar(50) DEFAULT NULL,
  KEY `groupId` (`role_id`),
  KEY `nodeId` (`node_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sw_access`
--

LOCK TABLES `sw_access` WRITE;
/*!40000 ALTER TABLE `sw_access` DISABLE KEYS */;
INSERT INTO `sw_access` VALUES (1,13,0,NULL);
/*!40000 ALTER TABLE `sw_access` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sw_auth`
--

DROP TABLE IF EXISTS `sw_auth`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sw_auth` (
  `auth_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `auth_name` varchar(20) NOT NULL COMMENT '名称',
  `auth_pid` smallint(6) unsigned NOT NULL COMMENT '父id',
  `auth_c` varchar(32) NOT NULL DEFAULT '' COMMENT '模块',
  `auth_a` varchar(32) NOT NULL DEFAULT '' COMMENT '操作方法',
  `auth_path` varchar(32) NOT NULL COMMENT '全路径',
  `auth_level` tinyint(4) NOT NULL DEFAULT '0' COMMENT '基别',
  PRIMARY KEY (`auth_id`)
) ENGINE=InnoDB AUTO_INCREMENT=146 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sw_auth`
--

LOCK TABLES `sw_auth` WRITE;
/*!40000 ALTER TABLE `sw_auth` DISABLE KEYS */;
INSERT INTO `sw_auth` VALUES (100,'生物标记',0,'','','100',0),(101,'生物标记引物',0,'','','101',0),(102,'突变',0,'','','102',0),(103,'参考序列',0,'','','103',0),(104,'药物',0,'','','104',0),(105,'疾病',0,'','','105',0),(106,'疾病突变关联分析',0,'','','106',0),(107,'药物突变关联分析',0,'','','107',0),(108,'疾病药物关联分析',0,'','','108',0),(109,'治疗',0,'','','109',0),(110,'疾病生物标志物Hs',0,'','','110',0),(111,'生物标记突变子集',0,'','','111',0),(112,'参考文献',0,'','','112',0),(113,'权限管理',0,'','','113',0),(114,'个人管理',0,'','','114',0),(115,'生物标记查询',100,'Biomarker','search','100-115',1),(116,'添加生物标记',100,'Biomarker','tianjia','100-116',1),(117,'生物标记引物查询',101,'Biomarkerprimer','search','101-117',1),(118,'添加生物标记引物',101,'Biomarkerprimer','tianjia','101-118',1),(119,'生物标记突变查询',102,'Mutation','search','102-119',1),(120,'添加生物标记突变',102,'Mutation','tianjia','102-120',1),(121,'参考序列查询',103,'Refseqs','search','103-121',1),(122,'添加参考序列',103,'Refseqs','tianjia','103-122',1),(123,'药物查询',104,'Drug','search','104-123',1),(124,'添加药物',104,'Drug','tianjia','104-124',1),(125,'疾病查询',105,'Disease','search','105-125',1),(126,'添加疾病',105,'Disease','tianjia','105-126',1),(127,'疾病突变分析查询',106,'Diseasemutationassociation','search','106-127',1),(128,'添加疾病突变分析',106,'Diseasemutationassociation','tianjia','106-128',1),(129,'药物突变分析查询',107,'Drugmutationassociation','search','107-129',1),(130,'添加药物突变分析',107,'Drugmutationassociation','tianjia','107-130',1),(131,'疾病药物分析查询',108,'Drugdiseaseassociation','search','108-131',1),(132,'添加疾病药物分析',108,'Drugdiseaseassociation','tianjia','108-132',1),(133,'治疗计划查询',109,'Treatment','search','109-133',1),(134,'添加治疗计划',109,'Treatment','tianjia','109-134',1),(135,'疾病标志物Hs查询',110,'DiseaseHs','search','110-135',1),(136,'添加疾病标志物Hs',110,'DiseaseHs','tianjia','110-136',1),(137,'生物标记突变子集查询',111,'Subset','search','111-137',1),(138,'添加生物标记突变子集',111,'Subset','tianjia','111-138',1),(139,'参考文献查询',112,'Reference','search','112-139',1),(140,'添加参考文献',112,'Reference','tianjia','112-140',1),(141,'管理员列表',113,'Manager','showlist','113-141',1),(142,'角色管理',113,'Role','showlist','113-142',1),(143,'权限列表',113,'Auth','showlist','113-143',1),(144,'修改口令',114,'Manager','changepasswd','114-144',1),(145,'退出系统',114,'Manager','logout','114-145',1);
/*!40000 ALTER TABLE `sw_auth` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sw_binli`
--

DROP TABLE IF EXISTS `sw_binli`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sw_binli` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `MedicalID` longtext NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Sex` varchar(255) NOT NULL,
  `Old` varchar(255) NOT NULL,
  `MedicalName` longtext NOT NULL,
  `State` longtext NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=gb2312;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sw_binli`
--

LOCK TABLES `sw_binli` WRITE;
/*!40000 ALTER TABLE `sw_binli` DISABLE KEYS */;
INSERT INTO `sw_binli` VALUES (1,'20141222-COMMON-965','武三','男','63','非小细胞癌','疾病选择'),(2,'20141222-BJ307-964','申二傻','女','67','非小细胞癌','报告生成'),(3,'20141222-COMMON-963','闫以偶','女','35','非小细胞癌','疾病选择'),(4,'20141220-BJ307-962','张人均','女','57','胃癌','报告生成'),(5,'20141219-BJ307-961','网一孙','男','43','结肠直肠癌','待上传结果'),(6,'20141218-BJ307-960','1阿斯顿','男','0','乳癌','基因及检测方案选择');
/*!40000 ALTER TABLE `sw_binli` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sw_biomarker`
--

DROP TABLE IF EXISTS `sw_biomarker`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sw_biomarker` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `GeneID` int(64) DEFAULT NULL,
  `GeneSymbol` varchar(64) DEFAULT NULL,
  `Synonyms` varchar(64) DEFAULT NULL,
  `GeneType` varchar(64) DEFAULT NULL,
  `Chromosome` int(64) DEFAULT NULL,
  `Strand` varchar(10) DEFAULT NULL,
  `Start` varchar(64) DEFAULT NULL,
  `End` varchar(64) DEFAULT NULL,
  `Category` longtext,
  `LastUpdated` varchar(64) DEFAULT NULL,
  `Operator` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=123 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sw_biomarker`
--

LOCK TABLES `sw_biomarker` WRITE;
/*!40000 ALTER TABLE `sw_biomarker` DISABLE KEYS */;
INSERT INTO `sw_biomarker` VALUES (1,10568,'SLC34A2','NPTIIb; NAPI-3B; NAPI-Iib','Protein coding',4,'+','25657435','25680370','Drug Efficacy Predictive Biomarker and Drug Target\r',NULL,NULL),(2,10342,'TFG','TF6; TRKT3','Protein coding',5,'+','100428134','100467811','Drug efficacy predictive biomarker\r',NULL,NULL),(3,1080,'CFTR','\"CF; MRP7; ABC35; ABCC7;',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(4,1244,'ABCC2','DJS; MRP2; cMRP; ABC30; CMOAT','Protein coding',10,'+','101542457','101611662','Drug efficacy predictive biomarker\r',NULL,NULL),(5,1494,'CTLA4','CD; GSE; GRD4; ICOS; CD152; CTLA-4; IDDM12; CELIAC3','Protein coding',2,'+','204732511','204738683','Drug Target biomarker\r',NULL,NULL),(6,1499,'CTNNB1','CTNNB; MRD19','Protein coding',3,'+','','','Drug Efficacy Predictive Biomarker and Drug Target\r',NULL,NULL),(7,2064,'HER2','HER-2;ERBB2','Protein coding',11,'-','43073538','43074275','Drug Target biomarker\r',NULL,NULL),(8,1956,'EGFR','ERBB; HER1; mENA; ERBB1; PIG61','Protein coding',7,'+','55086725','55275031','Drug Target biomarker\r',NULL,NULL),(9,2078,'ERG','p55; erg-3','Protein coding',21,'_','39739183','40033704','Disease Diagnostic Biomarker--Disease classification\r',NULL,NULL),(10,2099,'ER','ESR1; ESR; Era; ESRA; NR3A1','protein coding',6,'+','152011631','152424409','CTC\r',NULL,NULL),(11,2260,'FGFR1','CEK; FLG; OGD; FLT2; KAL2; BFGFR; CD331; FGFBR; FLT-2; HBGFR; N-','Protein coding',8,'_','38268656','38326352','Disease prognostic biomarker\r',NULL,NULL),(12,2261,'FGFR3','ACH; CEK2; JTK4; CD333; HSFGFR3EX','Protein coding',4,'+','0','0','Disease Diagnostic Biomarker--Disease classification\r',NULL,NULL),(13,2263,'FGFR2','BEK; JWS; BBDS; CEK3; CFD1; ECT1; KGFR; TK14; TK25; BFR-1; CD332','Protein coding',10,'_','123237844','123357972','Disease prognostic biomarker\r',NULL,NULL),(14,2305,'FOXM1','MPP2; TGT3; HFH11; HNF-3; INS-1; MPP-2; PIG29; FKHL16; FOXM1B; H','Protein coding',12,'+','2966846','2986321','Drug efficacy predictive biomarker\r',NULL,NULL),(15,2321,'VEGFR1','FLT1','Protein coding',13,'+','0','0','Drug Efficacy Predictive Biomarker and Drug Target\r',NULL,NULL),(16,2322,'FLK2; STK1; CD135','FLT3','Protein coding',0,'_','0','0','CTC\r',NULL,NULL),(17,2324,'VEGFR3','FLT4','Protein coding',0,'+','0','0','Drug Target biomarker\r',NULL,NULL),(18,238,'ALK','CD246; NBLST3','Protein coding',2,'_','29415640','30144477','Drug Efficacy Predictive Biomarker and Drug Target\r',NULL,NULL),(19,2475,'mTOR','FRAP; FRAP1; FRAP2; RAFT1; RAPT1; FLJ44809','Protein coding',1,'+','11166588','11322608','Disease prognostic biomarker\r',NULL,NULL),(20,25,'ABL1','ABL; JTK7; p150; c-ABL; v-abl; bcr/abl','Protein coding',9,'+','133589268','13376306','Drug Efficacy Predictive Biomarker and Drug Target\r',NULL,NULL),(21,27030,'MLH3','HNPCC7','Protein coding',14,'_','0','0','Disease Diagnostic Biomarker in Blood--Early detection\r',NULL,NULL),(22,27436,'EML4','C2orf2; ELP120; EMAP-4; EMAPL4; ROPP120','Protein coding',2,'+','42396490','42559688','Drug efficacy predictive biomarker\r',NULL,NULL),(23,2778,'GNAS','AHO; GSA; GSP; POH; GPSA; NESP; GNAS1; PHP1A; PHP1B; PHP1C; C20o','Protein coding',20,'+','0','0','Disease Diagnostic Biomarker--Disease classification\r',NULL,NULL),(24,29126,'CD274(PD-L1)','PD-L1','Protein coding',9,'+','0','0','Drug efficacy predictive biomarker\r',NULL,NULL),(25,2950,'GSTP1','PI; DFN7; GST3; GSTP; FAEES3','Protein coding',11,'+','67351066','67354124','Drug efficacy predictive biomarker\r',NULL,NULL),(26,2956,'MSH6','GTBP; HSAP; p160; GTMBP; HNPCC5','Protein coding',2,'+','0','0','Disease Diagnostic Biomarker in Blood--Early detection\r',NULL,NULL),(27,324,'APC','GS; DP2; DP3; BTPS2; DP2.5; PPP1R46','Protein coding',5,'+','112043202','112181936','Disease prognostic biomarker\r',NULL,NULL),(28,3265,'HRAS','CTLO; HAMSV; HRAS1; K-RAS; N-RAS; RASH1; C-H-RAS; H-RASIDX; C-BA','Protein coding',11,'_','532242','535550','Disease Diagnostic Biomarker in Blood--Early detection\r',NULL,NULL),(29,3320,'HSP90AA1','Hsp90; HSP89A; HSP90A; HSP90N; HSPCAL1; HSPCAL4','Protein coding',14,'+','0','0','Drug Target biomarker\r',NULL,NULL),(30,3383,'ICAM1','BB2; CD54; P3.58','Protein coding',19,'+','10397291','10381517','Disease Diagnostic Biomarker--Disease classification\r',NULL,NULL),(31,3417,'IDH1','IDH; IDP; IDCD; IDPC; PICD','Protein coding',2,'+','209100953','209119806','Disease prognostic biomarker\r',NULL,NULL),(32,3418,'IDH2','IDH; IDP; IDHM; IDPM; ICD-M; D2HGA2; mNADP-IDH','Protein coding',15,'_','0','0','Disease prognostic biomarker\r',NULL,NULL),(33,355,'FAS','APT1; CD95; FAS1; APO-1; FASTM; ALPS1A; TNFRSF6','Protein coding',10,'+','90750288','90775542','Disease Diagnostic Biomarker--Disease classification\r',NULL,NULL),(34,3596,'IL13','ALRH; BHR1; P600; IL-13','Protein coding',5,'+','0','0','Drug Efficacy Predictive Biomarker and Drug Target\r',NULL,NULL),(35,367,'AR','KD; AIS; TFM; DHTR; SBMA; HYSP1; NR3C4; SMAX1; HUMARA','Protein coding',0,'+','66763874','66950461','Drug efficacy predictive biomarker\r',NULL,NULL),(36,3717,'JAK2','JTK10; THCYT3','Protein coding',9,'+','0','0','Drug Efficacy Predictive Biomarker and Drug Target\r',NULL,NULL),(37,3718,'JAK3','JAKL; LJAK; JAK-3; L-JAK; JAK3_HUMAN','Protein coding',19,'_','0','0','Disease Diagnostic Biomarker--Disease classification\r',NULL,NULL),(38,3757,'KCNH2 ','HERG1','Protein coding',7,'_','150642044','150675402','Disease prognostic biomarker\r',NULL,NULL),(39,3791,'VEGFR2','FLK1; CD309; VEGFR; VEGFR2','Protein coding',4,'_','55944426','55991762','Drug Efficacy Predictive Biomarker and Drug Target\r',NULL,NULL),(40,3799,'KIF5B','KNS; KINH; KNS1; UKHC','Protein coding',10,'_','32297938','32345371','Drug efficacy predictive biomarker\r',NULL,NULL),(41,3815,'KIT','PBT; SCFR; C-Kit; CD117','Protein coding',4,'+','55524095','55606881','Drug efficacy predictive biomarker\r',NULL,NULL),(42,3845,'KRAS','NS; NS3; KRAS1; KRAS2; RASK2; KI-RAS; C-K-RAS; K-RAS2A; K-RAS2B;','Protein coding',12,'+','25358180','25403854','Drug efficacy predictive biomarker\r',NULL,NULL),(43,3880,'KRT19','K19; CK19;cyfra 21-1; K1CS;CK-19; cytokeratin 19; cytokeratin-19','Protein coding',17,'_','39679869','39684641','Disease Diagnostic Biomarker in Blood--Early detection\r',NULL,NULL),(44,3925,'STMN1','Lag; SMN; OP18; PP17; PP19; PR22; LAP18; C1orf215','Protein coding',1,'+','26210677','26233368','Drug efficacy predictive biomarker\r',NULL,NULL),(45,4089,'SMAD4','JIP; DPC4; MADH4; MYHRS','Protein coding',18,'+','0','0','Disease Diagnostic Biomarker--Disease classification\r',NULL,NULL),(46,4233,'MET','HGFR; AUTS9; RCCP2; c-Met','Protein coding',7,'+','116312459','116438440','Drug efficacy predictive biomarker\r',NULL,NULL),(47,4255,'MGMT','','Protein coding',10,'+','131265454','131565783','Drug efficacy predictive biomarker\r',NULL,NULL),(48,4288,'MKI67','KI-67','Protein coding',10,'+','129894923','129924468','Drug efficacy predictive biomarker\r',NULL,NULL),(49,4292,'MLH1','FCC2; COCA2; HNPCC; hMLH1; HNPCC2','Protein coding',3,'+','0','0','Microsatellite\r',NULL,NULL),(50,4352,'MPL','MPLV; TPOR; C-MPL; CD110; THCYT2','Protein coding',1,'+','0','0','Disease Diagnostic Biomarker--Disease classification\r',NULL,NULL),(51,4436,'MSH2','FCC1; COCA1; HNPCC; LCFS2; HNPCC1','Protein coding',2,'+','0','0','Disease Diagnostic Biomarker in Blood--Early detection\r',NULL,NULL),(52,4440,'MSI1','Musashi-1','Protein coding',11,'+','0','0','Disease prognostic biomarker\r',NULL,NULL),(53,4524,'MTHFR','','Protein coding',1,'_','11845787','11866160','Drug efficacy predictive biomarker\r',NULL,NULL),(54,4582,'MUC1','CA 15-3 ;EMA; PEM; PUM; KL-6; MAM6; PEMT; CD227; H23AG; MUC-1; M','Protein coding',1,'_','155158300','155162706','Disease Diagnostic Biomarker in Blood--Early detection\r',NULL,NULL),(55,472,'ATM','AT1; ATA; ATC; ATD; ATE; ATDC; TEL1; TELO1','Protein coding',11,'+','0','0','Disease Diagnostic Biomarker in Blood--Early detection\r',NULL,NULL),(56,4851,'NOTCH1',' hN1; AOS5; TAN1; AOVD1','Protein coding',9,'_','0','0','Disease Diagnostic Biomarker--Disease classification\r',NULL,NULL),(57,4869,'NPM1','B23; NPM','Protein coding',5,'+','0','0','Disease prognostic biomarker\r',NULL,NULL),(58,4893,'NRAS','NS6; ALPS4; N-ras; NRAS1','Protein coding',1,'+','115247085','115259515','Drug Efficacy Predictive Biomarker and Drug Target\r',NULL,NULL),(59,4921,'DDR2','TKT; MIG20a; NTRKR3; TYRO10','Protein coding',1,'+','0','0','Drug efficacy predictive biomarker\r',NULL,NULL),(60,50652,'PCA3','','MSI',9,'+','79379354','79402465','Disease Diagnostic Biomarker--Disease classification\r',NULL,NULL),(61,5133,'PDCD1(PD-1)','PD1; PD-1; CD279; SLEB2; hPD-1; hPD-l','Protein coding',2,'+','0','0','Drug efficacy predictive biomarker\r',NULL,NULL),(62,5156,'PDGFRA','CD140A; PDGFR2; PDGFR-2; RHEPDGFRA','Protein coding',4,'+','55095264','55164412','Drug Efficacy Predictive Biomarker and Drug Target\r',NULL,NULL),(63,5159,'PDGFRB','JTK12; PDGFR; CD140B; PDGFR1; PDGFR-1','Protein coding',5,'_','149493402','149535422','Drug efficacy predictive biomarker\r',NULL,NULL),(64,5241,'PR','PGR; NR3C3','Protein coding',11,'_','100900355','101000544','CTC\r',NULL,NULL),(65,5243,'ABCB1','CLCS; MDR1; P-GP; PGY1; ABC20; CD243; GP170','Protein coding',7,'_','87133179','87342639','Disease Diagnostic Biomarker--Disease classification\r',NULL,NULL),(66,5281,'PIGF','','',2,'_','0','0','Drug Efficacy Predictive Biomarker and Drug Target\r',NULL,NULL),(67,5290,'PIK3CA','PI3K; p110-alpha','Protein coding',3,'+','178866311','178952500','Drug efficacy predictive biomarker\r',NULL,NULL),(68,5347,'PLK1','PLK; STPK13','Protein coding',16,'+','0','0','Disease prognostic biomarker\r',NULL,NULL),(69,5395,'PMS2','PMSL2; HNPCC4; PMS2CL','Protein coding',7,'_','0','0','Microsatellite\r',NULL,NULL),(70,54458,'PRR13','TXR1','Protein coding',12,'+','53835433','53840427','Drug efficacy predictive biomarker\r',NULL,NULL),(71,54658,'UGT1A1','GNT1; UGT1; UDPGT; UGT1A; HUG-BR1; BILIQTL1; UDPGT 1-1','Protein coding',2,'+','0','0','Drug efficacy predictive biomarker\r',NULL,NULL),(72,55294,'FBXW7','AGO; CDC4; FBW6; FBW7; hAgo; FBX30; FBXW6; SEL10; hCdc4; FBXO30;','Protein coding',4,'+','0','0','Disease Diagnostic Biomarker--Disease classification\r',NULL,NULL),(73,55806,'HR','AU; MUHH; ALUNC; MUHH1; HSA277165; FLJ98880','Protein coding',8,'_','21971932','21988565','Disease prognostic biomarker\r',NULL,NULL),(74,5604,'MEK1','CFC3; MEK1; MKK1; MAPKK1; PRKMK1','Protein coding',15,'+','0','0','Drug Efficacy Predictive Biomarker and Drug Target\r',NULL,NULL),(75,5728,'PTEN','BZS; DEC; GLM2; MHAM; TEP1; MMAC1; PTEN1; 10q23del','Protein coding',10,'+','89623195','89728532','Drug Efficacy Predictive Biomarker\r',NULL,NULL),(76,5729,'PTCH1 ','PTC; BCNS; HPE7; PTC1; PTCH; NBCCS; PTCH11','Protein coding',9,'_','0','0','Drug Efficacy Predictive Biomarker and Drug Target\r',NULL,NULL),(77,5781,'PTPN11','CFC; NS1; SHP2; BPTP3; PTP2C; PTP-1D; SH-PTP2; SH-PTP3','Protein coding',12,'+','0','0','Disease Diagnostic Biomarker--Disease classification\r',NULL,NULL),(78,5894,'RAF1','NS5; CRAF; Raf-1; c-Raf','Protein coding',3,'+','12625100','12705700','Drug Efficacy Predictive Biomarker and Drug Target\r',NULL,NULL),(79,5903,'RANBP2','ANE1; TRP1; TRP2; IIAE3; NUP358','Protein coding',2,'+','109335937','109402267','Drug Efficacy Predictive Biomarker and Drug Target\r',NULL,NULL),(80,5925,'RB1','RB; pRb; OSRC; pp110; p105-Rb; PPP1R130','Protein coding',13,'+','0','0','Drug Target Biomarker\r',NULL,NULL),(81,595,'CCND1','BCL1; PRAD1; U21B31; D11S287E','Protein coding',11,'+','0','0','Disease Diagnostic Biomarker in Blood--Early detection\r',NULL,NULL),(82,5979,'RET','PTC; MTC1; HSCR1; MEN2A; MEN2B; RET51; CDHF12; CDHR16; RET-ELE1','Protein coding',10,'+','43572517','43625799','Drug efficacy predictive biomarker\r',NULL,NULL),(83,6098,'ROS1','ROS; MCF3; c-ros-1','Protein coding',6,'+','117609530','117747018','Drug efficacy predictive biomarker\r',NULL,NULL),(84,613,'BCR','ALL; CML; PHL; BCR1; D22S11; D22S662; FLJ16453','Protein coding',22,'+','23522552','23660224','Drug Efficacy Predictive Biomarker and Drug Target\r',NULL,NULL),(85,6240,'RRM1','R1; RR1; RIR1','Protein coding',11,'+','4115924','4160106','Drug efficacy predictive biomarker\r',NULL,NULL),(86,6608,'SMO','Gx; SMOH; FZD11','Protein coding',7,'+','0','0','Drug Efficacy Predictive Biomarker and Drug Target\r',NULL,NULL),(87,6714,'SRC','ASV; SRC1; c-SRC; p60-Src','Protein coding',20,'+','0','0','Disease Diagnostic Biomarker--Disease classification\r',NULL,NULL),(88,672,'BRCA1','IRIS; PSCP; BRCAI; BRCC1; PNCA4; RNF53; BROVCA1; PPP1R53','Protein coding',17,'_','41196312','41277500','Drug efficacy predictive biomarker\r',NULL,NULL),(89,673,'BRAF','NS7; BRAF1; RAFB1; B-RAF1','Protein coding',7,'_','140433812','140624564','Drug efficacy predictive biomarker\r',NULL,NULL),(90,675,'BRCA2','FAD; FACD; FAD1; GLM3; BRCC2; FANCB; FANCD; PNCA2; FANCD1; BROVC','Protein coding',13,'+','32889617','32973809','Disease Diagnostic Biomarker in Blood--Early detection\r',NULL,NULL),(91,6794,'STK11','PJS; LKB1; hLKB1','Protein coding',19,'+','0','0','Disease Diagnostic Biomarker--Disease classification\r',NULL,NULL),(92,6867,'TACC1','Ga55','Protein coding',8,'+','38585704','38710546','Disease prognostic biomarker\r',NULL,NULL),(93,6927,'HNF1A','HNF1; LFB1; TCF1; MODY3; TCF-1; HNF-1A; IDDM20','Protein coding',12,'+','0','0','Drug Target biomarker\r',NULL,NULL),(94,7057,'THBS1','TSP; THBS; TSP1; TSP-1; THBS-1','Protein coding',15,'+','39873280','39889668','Drug efficacy predictive biomarker\r',NULL,NULL),(95,7113,'TMPRSS2','PP9284; PRSS10','Protein coding',21,'_','42836478','42880085','Disease Diagnostic Biomarker--Disease classification\r',NULL,NULL),(96,7150,'TOP1','Top1','Protein coding',2,'+','39657462','39753127','Drug efficacy predictive biomarker\r',NULL,NULL),(97,7153,'TOP2A','TOP2; TP2A','Protein coding',17,'+','38544773','38574202','Drug efficacy predictive biomarker\r',NULL,NULL),(98,7157,'TP53','P53; LFS1; TRP53; FLJ92943','Protein coding',17,'_','7571720','7590863','Disease Diagnostic Biomarker--Disease classification\r',NULL,NULL),(99,7170,'TPM3','TM3; TM5; TRK; CFTD; NEM1; TM-5; TM30; hTM5; TM30nm; TPMsk3; hsc','Protein coding',1,'_','154127780','154164609','Drug Efficacy Predictive Biomarker and Drug Target\r',NULL,NULL),(100,7171,'TPM4','','Protein coding',1,'+','16178317','16213813','Drug Efficacy Predictive Biomarker and Drug Target\r',NULL,NULL),(101,7298,'TYMS','TS; TMS; HST422','Protein coding',18,'+','657604','673499','Drug efficacy predictive biomarker\r',NULL,NULL),(102,7422,'VEGFA ','VPF; VEGF; MVCD1','Protein coding',6,'+','43737946','43754224','Drug Efficacy Predictive Biomarker and Drug Target\r',NULL,NULL),(103,7428,'VHL','RCA1; VHL1; pVHL; HRCA1','Protein coding',3,'+','0','0','Disease Diagnostic Biomarker--Disease classification\r',NULL,NULL),(104,7515,'XRCC1','RCC','Protein coding',19,'_','44047464','44079730','Drug efficacy predictive biomarker\r',NULL,NULL),(105,7849,'PAX8 ','','Protein coding',2,'_','0','0','Disease Diagnostic Biomarker--Disease classification\r',NULL,NULL),(106,8030,'CCDC6','H4; PTC; TPC; TST1; D10S170','Protein coding',10,'_','61548505','61666414','Drug Efficacy Predictive Biomarker\r',NULL,NULL),(107,8223423,'HPV','HPV','Protein coding',0,'+','0','0','Virus Biomarker\r',NULL,NULL),(108,8600,'TNFSF11(RANKL)','RANKL','Protein coding',13,'+','43136872','43182149','CTC\r',NULL,NULL),(109,8792,'TNFRSF11A(RANK) ','RANK','Protein coding',18,'+','0','0','CTC\r',NULL,NULL),(110,931,'MS4A1','B1; S7; Bp35; CD20; CVID5; MS4A2; LEU-16','Protein coding',11,'+','60223282','60238225','Drug efficacy predictive biomarker\r',NULL,NULL),(111,94025,'MUC16','CA125','Protein coding',19,'_','8959520','9092018','Disease Diagnostic Biomarker in Blood--Early detection\r',NULL,NULL),(112,943,'CD30','TNFRSF8,Ki-1,D1S166E','Protein coding',1,'+','12063377','12144207','Drug Target biomarker\r',NULL,NULL),(113,9451,'EIF2AK3 ','PEK; WRS; PERK','Protein coding',2,'+','0','0','Drug Efficacy Predictive Biomarker and Drug Target\r',NULL,NULL),(114,960,'CD44','IN; LHR; MC56; MDU2; MDU3; MIC4; Pgp1; CDW44; CSPG8; HCELL; HUTC','Protein coding',11,'+','35160417','35253949','Disease Diagnostic Biomarker in Blood--Early detection\r',NULL,NULL),(115,968,'CD68','GP110; LAMP4; SCARD1','Protein coding',17,'+','7482805','7485429','Drug efficacy predictive biomarker\r',NULL,NULL),(116,972,'CD74','DHLAG; HLADG; Ia-GAMMA','Protein coding',5,'_','149781200','149792332','Microsatellite\r',NULL,NULL),(117,978,'CDA','CDD','Protein coding',1,'+','20915444','20945401','Drug efficacy predictive biomarker\r',NULL,NULL),(118,999,'CDH1','UVO; CDHE; ECAD; LCAM; Arc-1; CD324','Protein coding',16,'+','0','0','Disease Diagnostic Biomarker in Blood--Early detection\r',NULL,NULL),(119,1493,'CTLA4',NULL,'Protein coding',2,'+','204732511','204738683','Circulating Tumor Cell',NULL,NULL),(122,10568,'SLC34A2','NPTIIb; NAPI-3B; NAPI-Iib','Protein coding',4,'+','25657435','25680370','Circulating Tumor Cell',NULL,NULL);
/*!40000 ALTER TABLE `sw_biomarker` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sw_biomarkerprimer`
--

DROP TABLE IF EXISTS `sw_biomarkerprimer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sw_biomarkerprimer` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `DiseaseName` varchar(64) DEFAULT NULL,
  `ProductLength` int(64) DEFAULT NULL,
  `GeneSymbol` varchar(64) DEFAULT NULL,
  `GeneID` int(64) DEFAULT NULL,
  `PrimerDescription` varchar(100) DEFAULT NULL,
  `SampleType` varchar(10) DEFAULT NULL,
  `For_TemplateStrand` varchar(64) DEFAULT NULL,
  `For_Start` int(100) DEFAULT NULL,
  `For_Stop` int(100) DEFAULT NULL,
  `For_Tm` int(100) DEFAULT NULL,
  `For_GC` varchar(64) DEFAULT NULL,
  `For_PrimerSequence` varchar(100) DEFAULT NULL,
  `Rev_TemplateStrand` varchar(64) DEFAULT NULL,
  `Rev_Start` int(100) DEFAULT NULL,
  `Rev_Stop` int(100) DEFAULT NULL,
  `Rev_Tm` int(100) DEFAULT NULL,
  `Rev_GC` varchar(64) DEFAULT NULL,
  `Rev_PrimerSequence` varchar(100) DEFAULT NULL,
  `LastUpdated` datetime DEFAULT NULL,
  `Operator` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sw_biomarkerprimer`
--

LOCK TABLES `sw_biomarkerprimer` WRITE;
/*!40000 ALTER TABLE `sw_biomarkerprimer` DISABLE KEYS */;
INSERT INTO `sw_biomarkerprimer` VALUES (1,'Glioma',150,'IDH2',3418,'IDH2 codon 172 mutation primer',' paraffin ','Plus',18805,18824,50,'45','AGCCCATCATCTGCAAAAAC\r','Minus',18954,18936,55,'63','CTAGGCGAGGAGCTCCAGT\r',NULL,NULL),(3,'1',1,'1',1,'1','1','Minus',1,1,1,'1','1','Plus',1,1,1,'1','1','2016-01-05 10:22:00','admin');
/*!40000 ALTER TABLE `sw_biomarkerprimer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sw_disease`
--

DROP TABLE IF EXISTS `sw_disease`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sw_disease` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `MeSHID` varchar(64) DEFAULT NULL,
  `Type` varchar(64) DEFAULT NULL,
  `SubType` varchar(64) DEFAULT NULL,
  `Alias` varchar(64) DEFAULT NULL,
  `DiseaseStage` varchar(255) DEFAULT NULL,
  `DiseaseName` varchar(100) DEFAULT NULL,
  `ChineseName` varchar(64) CHARACTER SET utf8 DEFAULT NULL,
  `Description` longtext,
  `LastUpdated` datetime DEFAULT NULL,
  `Operator` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sw_disease`
--

LOCK TABLES `sw_disease` WRITE;
/*!40000 ALTER TABLE `sw_disease` DISABLE KEYS */;
INSERT INTO `sw_disease` VALUES (1,'D002289','Lung Cancer','Non-Small Cell Lung Cancer','NSCLC','Stage III','Non-Small Cell Lung Cancer','非小细胞癌症','Lung cancer has the highest mortality rate of all cancers, and is the second most diagnosed cancer\r\nin both men and women, behind prostate and breast cancer, respectively. It has been reportedthat more than 1.6 million cases are diagnosed each year along with 1.3 million deaths. Recently, the United States has released cancer statistics showing an occurrence of 221,130 new cases of lung cancer in 2011, accounting for ~14% of all cancer cases expected to be diagnosed. Approximately 85%–90% of lung cancer cases are caused by voluntary or involuntary (second hand) cigarette smoking. Lung cancer is mainly divided into two classes, which are non-small cell lung cancer (NSCLC, ~85%) and small cell lung cancer (SCLC, ~15%), according to biology therapy and prognosis. NSCLC could be further divided into squamous cell carcinoma (SCC), adenocarcinoma and large cell lung carcinoma (LCLC). Genetic susceptibility plays a crucial role in the occurrence of lung cancer, especially in young patients.\r\nLung cancer is aggressive and its treatment remains one of the most challenging tasks in the medical world. Conventional treatment modalities include surgery, radiation therapy and chemotherapy. The selection of therapy is dependent upon the cancer type (small cell or non-small cell), development stage, and genetic characterization. Patients diagnosed with lung cancer often receive more than one type of treatment. The discovery and development of molecular inhibitors have had a major impact in the treatment of NSCLC. In the last decade, four molecular targeted agents were approved for treatment of lung cancer: gefitinib (2002), erlotinib (2003), bevacizumab (2006), and crizotinib (2011). The 1-year survival rate for lung cancer was 43% in 2003–2006. However, the overall 5-year survival rate for all stages is still as low as 16%–17% for NSCLC and even lower in SCLC (6%). Despite the 5-year survival rate reaching 53% for patients diagnosed at an early stage, only 15% of such cases were determined in a timely manner when the tumor was still localized','0000-00-00 00:00:00',''),(2,'1','1','1','1',NULL,'1','1','1','2016-01-05 14:49:00','admin');
/*!40000 ALTER TABLE `sw_disease` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sw_diseasemutationassociation`
--

DROP TABLE IF EXISTS `sw_diseasemutationassociation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sw_diseasemutationassociation` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `MeSHID` int(100) DEFAULT NULL,
  `DiseaseName` varchar(64) DEFAULT NULL,
  `dbSNPID` int(100) DEFAULT NULL,
  `Biomarker` varchar(64) DEFAULT NULL,
  `MutationCategory` varchar(64) DEFAULT NULL,
  `BiomarkerType` varchar(100) DEFAULT NULL,
  `Reference` varchar(64) DEFAULT NULL,
  `MedicationGuide_CN` varchar(64) CHARACTER SET utf8 DEFAULT NULL,
  `MedicationGuide` longtext,
  `SignificanceOfGeneTesting` longtext CHARACTER SET utf8,
  `Description` longtext,
  `Operator` varchar(255) DEFAULT NULL,
  `LastUpdated` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sw_diseasemutationassociation`
--

LOCK TABLES `sw_diseasemutationassociation` WRITE;
/*!40000 ALTER TABLE `sw_diseasemutationassociation` DISABLE KEYS */;
INSERT INTO `sw_diseasemutationassociation` VALUES (1,NULL,'Non-Small Cell Lung Cancer',NULL,'ALK',' mutation','Disease Diagnosis','4155,4156,4157','ALK V1180L及l1171T突变-->克唑替尼及alectinib的耐药,但Ceritinib敏感。\r\n','ALK V1180L and I1171T mutation-->resistance to crizotinib and alectinib, but were sensitive to ceritinib and other next-generation ALK-TKIs.\r\n','研究证实，ALK突变(V1180L和I1171T位点)时，容易造成患者对克唑替尼及alectinib耐药，但其他的新一代非小细胞肺癌ALK酪氨酸激酶以及抑制剂敏感。\r\n','The first-generation ALK tyrosine kinase inhibitor (TKI) crizotinib is a standard therapy for patients with ALK-rearranged non–small cell lung cancer (NSCLC). Several next-generation ALK-TKIs have entered the clinic and have shown promising activity in crizotinib-resistant patients. As patients still relapse even on these next-generation ALK-TKIs, we examined mechanisms of resistance to the next-generation ALK-TKI alectinib and potential strategies to overcome this resistance. \r\nExperimental Design: We established a cell line model of alectinib resistance, and analyzed a resistant tumor specimen from a patient who had relapsed on alectinib. We developed Ba/F3 models harboring alectinib-resistant ALK mutations and evaluated the potency of other next-generation ALK-TKIs in these models. We tested the antitumor activity of the next-generation ALK-TKI ceritinib in the patient with acquired resistance to alectinib. To elucidate structure–activity relationships of ALK mutations, we performed computational thermodynamic simulation with MP-CAFEE. \r\nResults: We identified a novel V1180L gatekeeper mutation from the cell line model and a second novel I1171T mutation from the patient who developed resistance to alectinib. Both ALK mutations conferred resistance to alectinib as well as to crizotinib, but were sensitive to ceritinib and other next-generation ALK-TKIs. Treatment of the patient with ceritinib led to a marked response. Thermodynamics simulation suggests that both mutations lead to distinct structural alterations that decrease the binding affinity with alectinib.\r\nConclusions: We have identified two novel ALK mutations arising after alectinib exposure that are sensitive to other next-generation ALK-TKIs. The ability of ceritinib to overcome alectinib-resistance mutations suggests a potential role for sequential therapy with multiple next-generation ALK-TKIs.',NULL,NULL),(2,2,'Non-Small Cell Lung Cancer',2,'2','2','Protein coding','2','2','2','2','2','admin','2016-01-05 17:05');
/*!40000 ALTER TABLE `sw_diseasemutationassociation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sw_drug`
--

DROP TABLE IF EXISTS `sw_drug`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sw_drug` (
  `ID` int(64) NOT NULL AUTO_INCREMENT,
  `DrugBankID` varchar(64) DEFAULT NULL,
  `DrugName` varchar(64) DEFAULT NULL,
  `Synonyms` varchar(64) DEFAULT NULL,
  `DrugChineseName` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `Maker` varchar(64) DEFAULT NULL,
  `Maker_CN` varchar(64) CHARACTER SET utf8 DEFAULT NULL,
  `TradeName` varchar(64) DEFAULT NULL,
  `Target` varchar(100) DEFAULT NULL,
  `Class` varchar(100) DEFAULT NULL,
  `ChineseBrandName` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `AveragePrice` varchar(100) DEFAULT NULL,
  `DrugStage` varchar(100) DEFAULT NULL,
  `DrugStatus` varchar(100) DEFAULT NULL,
  `AvailableInChina` varchar(10) DEFAULT NULL,
  `Country` varchar(20) DEFAULT NULL,
  `FullPrescribingInformation` varchar(100) DEFAULT NULL,
  `FullPrescribingInformation_CN` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `Description` varchar(100) DEFAULT NULL,
  `Description_CN` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `SideEffect` varchar(100) DEFAULT NULL,
  `MechanismOfAction` varchar(100) DEFAULT NULL,
  `MechanismOfAction_CN` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `Contraindication` varchar(20) DEFAULT NULL,
  `Contraindication_CN` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `Attention` varchar(20) DEFAULT NULL,
  `Attention_CN` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `UntowardEffect` varchar(100) DEFAULT NULL,
  `UntowardEffect_CN` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `PharmaceuticalComposition` varchar(100) DEFAULT NULL,
  `PharmaceuticalComposition_CN` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `DrugInteraction` varchar(100) DEFAULT NULL,
  `DrugInteraction_CN` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `Event` varchar(20) DEFAULT NULL,
  `Event_CN` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `Date` varchar(20) DEFAULT NULL,
  `LastUpdated` datetime DEFAULT NULL,
  `Operator` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sw_drug`
--

LOCK TABLES `sw_drug` WRITE;
/*!40000 ALTER TABLE `sw_drug` DISABLE KEYS */;
INSERT INTO `sw_drug` VALUES (1,'DB08700','Crizotinib','PF-2341066,Xalkori','克唑替尼','Pfizor','','Xalkori','ALK and c-MET inhibitor','Small molecule tyrosine kinase inhibitors (TKIs)','克唑替尼','859-4359','approved','FDA','Yes','America','','无','Crizotinib (Xalkori,[1] Pfizer), is an ALK (anaplastic lymphoma kinase) inhibitor, approved for trea','XALKORI (crizotinib)胶囊获得美国食品药品管理局(FDA)批准，这是第一个对间变性淋巴瘤激酶(ALK)进行靶向治疗的药品，用于治疗通过FDA批准的检测方法诊断为ALK阳性的局部晚期或','Get emergency medical help if you have any of these signs of an allergic reaction: hives; difficult ','Crizotinib is a tyrosine kinase receptor inhibitor. More specifically, it inhibits anaplastic lympho','Crizotinib是酪氨酸激酶受体包括ALK，肝细胞生长因子受体(HGFR, c-Met)，和RecepteurOrigineNantais(RON)的一种抑制剂。易位可影响ALK基因导致致癌融合蛋','none','无','?','肺炎：严重，为指示性肺炎肺部症状监视患者','Get emergency medical help if you have any of these signs of an allergic reaction: hives; difficult ','视力障碍, 恶心，腹泻，呕吐，水肿，和便秘，ALT增加和中性粒细胞减少','C21H22Cl2FN5O','XALKORI(crizotinib)是一种口服酪氨酸激酶受体抑制剂。Crizotinib的分子式是C21H22Cl2FN5O。分子量是450.34道尔顿。Crizotinib化学上称为(R)-3-[','Bosutini:Strong CYP3A4 inhibitors may increase levels of crizotinib. Consider alternative therapy.\nC','Crizotinib和CYP3A底物的共同给药，Crizotinib和CYP3A抑制剂的共同给药，Crizotinib和CYP3A诱导剂的共同给，Crizotinib和抗酸药的共同给药，与其它CYP底','none','无','',NULL,NULL),(2,'APRD00951','Tarceva','Erlotinib-Hydrochloride','厄洛替尼','','','','','','特罗凯','','approved','','','America','','','','','','','','','','','','','','','','','','','','',NULL,NULL),(3,'','Apatinib','YN968D1','阿帕替尼','','江苏恒瑞医药股份有限公司','','VEGFR2','Small molecule tyrosine kinase inhibitors (TKIs)','阿帕替尼片','','stageIII','SFDA','Yes','China','metastatic gastric carcinoma, metastatic breast cancer and advanced hepatocellular carcinoma.','阿帕替尼片可用于治疗晚期非鳞非小细胞肺癌，胃癌，肝癌，乳腺癌。','It is an orally bioavailable, small molecule agent which is thought to inhibit angiogenesis in cance','阿帕替尼是一种分子靶向抗肿瘤药物，由江苏恒瑞医药股份有限公司自主研发的一类新药，拥有自主知识产权的小分子血管内皮生长因子酪氨酸激酶抑制剂。','hypertension?Prolong clotting time?Proteinuria? hand foot syndrome','','','','','','','hypertension?Prolong clotting time?Proteinuria? hand foot syndrome','高血压，凝血时间延长，蛋白尿，手足综合症','','','apatinib reverses the ABCB1- and ABCG2-mediated multidrug resistance by inhibiting those functions a','','','','',NULL,NULL),(4,'DB06626','Axitinib','Inlyta','阿西替尼','Pfizer','辉瑞','Inlyta','VEGF inhibitor','Small molecule tyrosine kinase inhibitors (TKIs)','','1323.0 - 2268.0','approved','FDA','Yes','America','kidney cancer','INLYTA 是一种激酶抑制剂适用于一种既往全身治疗失败后晚期肾细胞癌的治疗。','Axitinib is an oral, potent, and selective inhibitor of vascular endothelial growth factor receptors','阿西替尼也是多靶点酪氨酸激酶抑制剂，可以抑制血管内皮细胞生长因子受体(Vascular Endothelial Growth Factor Receptor，VEGFR) VEGFR1, VEGFR2','Get emergency medical help if you have any of these signs of an allergic reaction: hives; difficult ','Axitinib selectively blocks the tyrosine kinase receptors VEGFR-1 (vascular endothelial growth facto','阿西替尼也是多靶点酪氨酸激酶抑制剂，可以抑制血管内皮细胞生长因子受体，VEGFR1, VEGFR2, VEGFR3, 血小板衍生生长因子受体和c-KIT','The only contraindic','对阿西替尼过敏','Coadministration wit','曾观察到高血压包括高血压危象。开始INL','Get emergency medical help if you have any of these signs of an allergic reaction: hives; difficult ','最常见(≥20%)不良反应是腹泻，高血压，疲乏，食欲减低，恶心，发音障碍，手掌-足底erythrodysesthesia (手-足)综合征，体重减轻，呕吐，乏力，和便秘。','Axitinib prevents the progression of cancer by inhibiting angiogenesis and blocking tumor growth.','阿西替尼的合成是通过以吲唑为中心，两次钯催化的偶联来完成。\n化合物1和6-碘吲唑(2)在钯催化下生成3,3与碘反应在吲唑3位上碘生成4，因为吲唑环富电子，所以碘化都发生在吲唑环而不是苯环。最后4与5发','Clobazam Clobazam decreases levels by affecting CYP3A4 metabolism. Consider alternate therapy.\nEtrav','（1）避免强CYP3A4/5抑制剂。如不可避免，减低INLYTA 剂量。\n（2）避免强CYP3A4/5诱导剂。','','','',NULL,NULL),(5,'DB01254','Dasatinib','Sprycel','达沙替尼','Bristol Myers Squibb','百时美施贵宝','Sprycel',' BCR/ABL, Src, c-Kit, ephrin receptors','Small molecule tyrosine kinase inhibitors (TKIs)','施达赛','Sprycel 100 mg tablet 278.24USD','','FDA','Yes','America','For the treatment of adults with chronic, accelerated, or myeloid or lymphoid blast phase chronic my','达沙替尼用于已经治疗包括甲磺酸伊马替尼耐药或不能耐受的慢性骨髓性白血病所有病期（慢性期、加速期、淋巴系细胞急变期和髓细胞急变期）的成人患者。同时，FDA也经正常程序批准达沙替尼治疗对其他疗法耐药或不能','Dasatinib is an oral dual BCR/ABL and Src family tyrosine kinase inhibitor approved for use in patie','达沙替尼抑制BCR-ABL激酶和SRC家族激酶以及许多其他选择性的致癌激酶，包括c-KIT，ephrin（EPH）受体激酶和PDGFβ受体。','Get emergency medical help if you have any of these signs of an allergic reaction: hives; difficulty','Dasatinib, at nanomolar concentrations, inhibits the following kinases: BCR-ABL, SRC family (SRC, LC','达沙替尼抑制BCR-ABL激酶和SRC家族激酶以及许多其他选择性的致癌激酶，包括c-KIT，ephrin（EPH）受体激酶和PDGFβ受体。达沙替尼是一种强效的、次纳摩尔（subnanomolar）的','allergic to gefitinb','已知对该活性物质或该产品任一赋形剂有严重','Food and Drug Admini',' 用药 【孕妇及哺乳期妇女用药】妊娠：目','Neutropenia and myelosuppression were common toxic effects. Fifteen patients (of 84, i.e. 18%) in th','达沙替尼治疗的不良反应大部分为轻度到中度。大部分伊马替尼不耐受的慢性期CML患者能够耐受达沙替尼治疗。最常见的不良反应包括体液潴留（包括胸腔积液）、腹泻、头痛、恶心、皮疹、呼吸困难、出血、疲劳、肌肉骨','N-(2-CHLORO-6-methylphenyl)-2-({6-[4-(2-hydroxyethyl)piperazin-1-yl]-2-methylpyrimidin-4-yl}amino)-1','N-(2-氯-6-甲基苯基)-2-[[6-[4-(2-羟乙基)-1-哌嗪基]-2-甲基-4-嘧啶基]氨基]-5-噻唑甲酰胺(一水物)C22H26ClN7O2S.H2O','Artemether Additive QTc-prolongation may occur. Concomitant therapy should be avoided.\nEtravirine Da','达沙替尼与强效抑制CYP3A4的药物（例如酮康唑、伊曲康唑、红霉素、克拉霉素、利托那韦、泰利霉素）同时使用可增加达沙替尼的暴露。因此，在接受达沙替尼治疗的患者中，不推荐经全身给予强项的CYP3A4抑制','','','',NULL,NULL),(6,'APRD00997','Gefitinib','Iressa','吉非替尼','Astrazeneca','阿斯利康','Iressa','EGFR','Small molecule tyrosine kinase inhibitors (TKIs)','易瑞沙','Iressa 250 mg tablet 68.08USD','approved','FDA','Yes','China','For the continued treatment of patients with locally advanced or metastatic non-small cell lung canc','治疗既往接受过化学治疗或不适于化疗的局部晚期或转移性非小细胞肺癌(NSCLC)。','Gefitinib (INN,  /?&#603;&#712;f&#618;t&#616;n&#618;b/, trade name Iressa, marketed by AstraZeneca a','吉非替尼是一种选择性表皮生长因子受体(EGFR)酪氨酸激酶抑制剂，该酶通常表达于上皮来源的实体瘤。对于EGFR酪氨酸激酶活性的抑制可妨碍肿瘤的生长，转移和血管生成，并增加肿瘤细胞的凋亡。','If you experience any of the following serious side effects from gefitinib, contact your doctor imme','Gefitinib inhibits the epidermal growth factor receptor (EGFR) tyrosine kinase by binding to the ade','摘要抑制表皮生长因子受体(EGFR)酪氨酸激酶通过绑定到三磷酸腺苷(ATP)绑定的酶。因此表皮生长因子受体酪氨酸激酶的功能激活Ras抑制信号转导级联,并抑制恶性细胞。吉是第一选择的表皮生长因子受体酪氨','allergic to gefitinb','已知对该活性物质或该产品任一赋形剂有严重','','接受吉非替尼治疗的患者，偶尔可发生急性间','Acne-like rash is reported very commonly. Other common adverse effects (?1% of patients) include: di','腹泻、皮疹、瘙痒、皮肤干燥和痤疮，发生率20%以上，一般见于服药后一个月内，通常是可逆性的。大约8%的患者出现严重的ADRs(CTC标准3或4级)','Gefitinib inhibits the intracellular phosphorylation of numerous tyrosine kinases associated with tr','C22H24ClFN4O3','Acenocoumarol Gefitinib may increase the anticoagulant effect of acenocoumarol.\nAmobarbital The CYP3','体外试验证实吉非替尼通过CYP3A4代谢。在健康志愿者中将吉非替尼与利福平（已知的强CYP3A4诱导剂）同时给药,吉非替尼的平均AUC降低83%(见\"警告和预防\"节) 在健康志愿者中将吉非替尼与itr','','','',NULL,NULL),(7,'DB00619 ','Imatinib',' Gleevec','伊马替尼',' Novartis','瑞士诺华公司',' Gleevec','KIT mutationsBcr-Abl fusion','Small molecule tyrosine kinase inhibitors (TKIs)','格列卫','Gleevec 100 mg tablet41.69USD','approved','FDA','Yes','China','chronic myelogenous leukemia (CML), gastrointestinal stromal tumors (GISTs) and a number of other ma','用于治疗慢性粒细胞白血病(CML)急变期、加速期或α-干扰素治疗失败后的慢性期患者；不能手术切除或发生转移的恶性胃肠道间质肿瘤（GIST）患者。','Imatinib is a small molecule kinase inhibitor used to treat certain types of cancer. It is currently','甲磺酸伊马替尼在体内外均可在细胞水平上抑制Bcr-Abl酪氨酸激酶，能选择性抑制Bcr-Abl阳性细胞系细胞、Ph染色体阳性的慢性粒细胞白血病和急性淋巴细胞白血病病人的新鲜细胞的增殖和诱导其凋亡。此外','Get emergency medical help if you have any of these signs of an allergic reaction: hives; difficulty','Imatinib mesylate is a protein-tyrosine kinase inhibitor that inhibits the Bcr-Abl tyrosine kinase, ','甲磺酸伊马替尼在体内外均可在细胞水平上抑制Bcr-Abl酪氨酸激酶，能选择性抑制Bcr-Abl阳性细胞系细胞、Ph染色体阳性的慢性粒细胞白血病和急性淋巴细胞白血病病人的新鲜细胞的增殖和诱导其凋亡。此外','hypersensitivity to ','对本药活性物质或任何赋形剂成份过敏者禁用','Hepatic impairment, ','大约有1-2%服用本品的患者发生严重水潴','The most common side effects include feeling sick (nausea), diarrhea, headaches, leg aches/cramps, f','轻度恶心（50-60%），呕吐，腹泻、腹痛、乏力、肌痛、肌痉挛及红斑，这些不良事件均容易处理。所有研究中均报告有浮肿和水潴留，发生率分别为47-59%和7-13%，其中严重者分别为1-3%和1-2%。','4-[(4-methylpiperazin-1-yl)methyl]-N-(4-methyl-3-{[4-(pyridin-3-yl)pyrimidin-2-yl]amino}phenyl)benza','4-[(4-甲基-1-哌嗪基)甲基]-N-[4-甲基-3-[4-(3-吡啶基)-2-嘧啶基]氨基]苯基]苯甲酰胺C29H31N7O','Its use is advised against in patients on strong CYP3A4 inhibitors such as clarithromycin, chloramph','可改变甲磺酸伊马替尼血浆浓度的药物\n\nCYP3A4抑制剂：健康志愿者同时服用单剂酮康唑（CYP3A4抑制剂）后，甲磺酸伊马替尼的药物暴露量大大增加（平均最高血浆浓度（Cmax）和曲线下面积（AUC）可','','','',NULL,NULL),(9,'1','1','1','11','1','1','1','11','1','11','1','1','1','No','China','1','1','11','1','1','1','1','1','1','1','1','1','11','1','1','1','1','11','1','1','2016-01-01 13:32:00','admin');
/*!40000 ALTER TABLE `sw_drug` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sw_drugdiseaseassociation`
--

DROP TABLE IF EXISTS `sw_drugdiseaseassociation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sw_drugdiseaseassociation` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `MeSHID` int(100) DEFAULT NULL,
  `DiseaseName` varchar(64) DEFAULT NULL,
  `DiseaseStage` varchar(64) DEFAULT NULL,
  `DrugbankID` int(100) DEFAULT NULL,
  `DrugName` varchar(100) DEFAULT NULL,
  `DrugStage` varchar(64) DEFAULT NULL,
  `StartedYear` varchar(64) DEFAULT NULL,
  `ApprovedYear` varchar(64) DEFAULT NULL,
  `DrugStageDescription` varchar(64) DEFAULT NULL,
  `AssociationDescription` varchar(100) DEFAULT NULL,
  `ClinicalApplicationDescription` longtext,
  `Operator` varchar(100) DEFAULT NULL,
  `LastUpdated` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sw_drugdiseaseassociation`
--

LOCK TABLES `sw_drugdiseaseassociation` WRITE;
/*!40000 ALTER TABLE `sw_drugdiseaseassociation` DISABLE KEYS */;
INSERT INTO `sw_drugdiseaseassociation` VALUES (1,NULL,'Non-Small Cell Lung Cancer','Stage III',NULL,'Sorafenib','Clinical trial III','8-Mar-06','Oct-14','Clinical Trial III','Squamous NSCLC','A significant PFS benefit was observed for sorafenib in patients with mutated EGFR: median PFS was 2.7 months with sorafenib versus 1.4 months with placebo (hazard ratio [HR] = .27; 95% CI, .16-.46; P <.001). PFS was also significantly better with sorafenib in wild-type EGFR patients versus the placebo group: median PFS of 2.7 months versus 1.5 months, respectively (HR = .62; 95% CI, .48-.82; P <.001).\r\nBayer HealthCare Pharmaceuticals and Onyx Pharmaceuticals, Inc. (Nasdaq: ONXX) today announced that a Phase 3 trial evaluating Nexavar (sorafenib) tablets in patients with advanced relapsed or refractory non-squamous non-small cell lung cancer (NSCLC) whose disease progressed after two or three previous treatments, did not meet its primary endpoint of improving overall survival. An improvement in the secondary endpoint of progression-free survival (PFS) was observed.The study compared Nexavar plus best supportive care to placebo plus best supportive care. The safety and tolerability data were generally as expected. The data will be presented at an upcoming scientific meeting.\r\n“While we are disappointed that the primary endpoint was not met, we believe the study results will advance the scientific knowledge in lung cancer,” said Dr. Dimitris Voliotis, Vice President, Global Clinical Development Oncology, Bayer HealthCare.\r\nPhase 3 Trial Design\r\nThe MISSION (Monotherapy admInistration of Sorafenib in patientS wIth nOn-small cell luNg cancer) trial is an international multicenter study that randomized 703 patients with advanced relapsed or refractory non-squamous NSCLC whose disease progressed after two or three previous treatments. Patients were randomized to receive either Nexavar as single agent or placebo. In both study arms, best supportive care was provided. The primary endpoint of the trial was overall survival, and secondary endpoints included progression-free survival, disease control rate, overall response rate, time to progression and quality of life.','HT','2015/11/7');
/*!40000 ALTER TABLE `sw_drugdiseaseassociation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sw_drugmutationassociation`
--

DROP TABLE IF EXISTS `sw_drugmutationassociation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sw_drugmutationassociation` (
  `ID` int(64) NOT NULL AUTO_INCREMENT,
  `DrugbankID` int(100) DEFAULT NULL,
  `DrugName` varchar(64) DEFAULT NULL,
  `dbSNPID` int(100) DEFAULT NULL,
  `Mutation` varchar(64) DEFAULT NULL,
  `BiomarkerType` varchar(100) DEFAULT NULL,
  `Reference` varchar(64) DEFAULT NULL,
  `MedicationGuide` varchar(64) CHARACTER SET utf8 DEFAULT NULL,
  `MedicationGuide_English` varchar(64) DEFAULT NULL,
  `SignificanceOfGeneTesting_Chinese` longtext CHARACTER SET utf8,
  `Description` longtext,
  `Operator` varchar(100) DEFAULT NULL,
  `LastUpdated` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sw_drugmutationassociation`
--

LOCK TABLES `sw_drugmutationassociation` WRITE;
/*!40000 ALTER TABLE `sw_drugmutationassociation` DISABLE KEYS */;
INSERT INTO `sw_drugmutationassociation` VALUES (1,NULL,'Non-Small Cell Lung Cancer',NULL,'Stage III','Sorafenib','Clinical trial III','8-Mar-06','Oct-14','Clinical Trial III','Squamous NSCLC',' ',NULL),(2,NULL,'Gefitinib',NULL,'EGFR exon 19?20 insertion','Drug sensitive biomarkers','2254,263,262,86,41,70,75,140,43,72,2259,2260,2261','E19缺失-->吉非替尼敏感；\nE20插入和T790M突变-->吉非替尼易耐药','Exon 19 deletion and Exon 21 mutation can use EGFR-TKI? Exon 20 ','表皮生长因子受体（EGFR）由一个胞内的酪氨酸激酶结构域，一个跨膜的亲脂性片段和一个胞外的配基结合域构成。表皮生长因子（EGF）通过与EGFR的胞外区结合调控细胞的增殖与分化。临床研究表明，癌细胞中发生EGFR基因外显子19缺失、外显子20插入或外显子21突变的患者，应用靶向药物EGFR酪氨酸激酶抑制剂（EGFR-TKI）易瑞沙治疗的有效率高达80%以上，而无此突变的患者则有效率不到20%。同时，研究亦证实EGFR突变分布与临床上EGFR-TKI治疗有效人群一致，主要见于女性、腺癌、非吸烟者及亚裔患者。\n      实际治疗中，EGFR-TKI用药敏感的患者最终大多会产生耐药，其原因主要是由于EGFR基因外显子20的T790M突变（C-T）。在2011年版《非小细胞肺癌临床实践指南（中国版）》中明确提出，EGFR外显子19缺失, 外显子21突变, 以及外显子18突变与肿瘤对酪氨酸激酶抑制剂（TKIs）的敏感度有重要关系。大量研究数据表明EGFR 基因突变主要集中在酪氨酸激酶区(Tyrosine Kinase Codingdomain，18-21 外显子)，其中19 外显子多为框内缺失(746-753)性突变，约占所有突变的45％﹔ 21 外显子多为替代突变(主要是L858R)，约占所有突变的40％。目前普遍认为，这两个热点突变可以增强肿瘤细胞对TKI 的敏感性，并且可作为TKI 治疗的有效预测指标。因此，检测EGFR 基因突变对于指导NSCLC 病人临床用药具有重要的参考价值。30-40%NSCLC癌患者存在EGFR基因扩增，而治疗非小细胞肺癌的靶向药物真是针对EGFR基因扩增的患者，研究表明，EGFR基因扩增的患者，应用Gefitinib/ Erlotinib的有效率为35%，疾病控制率高达70%。','It has become a common topic of conversation on this site (and in the lung cancer community at large) to discuss mutations in the epidermal growth factor receptor (EGFR). However, since we frequently throw out the terms “deletion 19 mutation”, “L858R”, and “T790M”, I thought would be worthwhile to explain a little bit about the different EGFR mutations and what we know about their clinical significance.\nThe history and significance of EGFR mutations has been covered quite well in previous posts here, but I’ll provide my own quick synopsis, from the perspective of someone working in Boston during the time this work was being done. In the early 2000s the EGFR tyrosine kinase inhibitors (TKIs) Iressa (gefitinib) and Tarceva (erlotinib) were tested in large numbers of patients with non-small cell lung cancer. It was known the EGFR was an important target in lung cancer, since most NSCLC tumors express it and high levels of expression were associated with a worse prognosis, and the results of numerous trials testing these drugs in unselected patients were modestly positive. In a phase III trial, Iressa did not improve overall survival compared to placebo treatment in previously treated NSCLC patients (leading to the death of this drug in the USA), but the similar BR.21 trial (testing Tarceva rather than Iressa) did show a modest (~2 month) improvement in overall survival in previously treated NSCLCpatients. This led to the approval of Tarceva in all NSCLC patients who had failed one or two prior chemotherapy regimens.\nHowever, what was immediately evident from these and earlier trials, was that about 10% of Western patients treated with either of these drugs had dramatic and sometimes long-lasting responses. When they looked at who these people were, they found that most were women, all had adenocarcinoma (or BAC, a type of adenocarcinoma), many were Asian ethnicity, and most had either never smoked or smoked very little compared to average NSCLC patients. In 2004, investigators at the Dana Farber Cancer Institute and at Massachusetts General Hospital in Boston, and also at Memorial Sloan Kettering Cancer Center in NYC, simultaneously published results showing that most of these “dramatic responders” had specific mutations in the tyrosine kinase (TK) domain of the EGFR gene. The EGFR protein sits in the cell membrane and straddles the inside and outside of the cell.\nThe TK is the part of the protein, located inside the cell, which “switches on” when a growth factor (or ligand) from outside the cell binds to the outside portion of the EGFR. This switch, when flipped on, allows the EGFR to signal the cell to grow and survive. In the NSCLC patients who have mutations in the TK domain of the EGFR, very little growth factor is needed to flip on the switch, and once turned on the cancer cell is driven to grow and divide essentially through this one signal. This makes the cancer cell exquisitely sensitive to dying when the switch is turned off by a drug like Iressa or Tarceva and explains why some patients can do so well on these drugs.\nHowever, there was controversy for many years about the true significance of these mutations, which have only recently been resolved. Investigators from the BR.21 trial looked at the tumor samples from the patients on the trial (there were relatively few available) and tested them forEGFR mutations to see if the patients with mutations lived longer when treated with Tarceva than placebo. When they published that they were unable to detect any survival benefit in the mutant patients, this threw a wrench in the concept of the importance of mutations that only recently has been corrected. The problem with their analysis, not completely understood at that time, was that all EGFR mutations are not the same and most of the ones they found were not important ones. The EGFR gene has 28 exons (parts of the DNA that serve as the blueprint for the EGFR protein), and exons 18 through 21 code for the TK part of the receptor. There can be mutations anywhere in the TK domain, but only some of them confer sensitivity to the TKIs!\nAbout 45% of sensitizing mutations are what are called in frame deletions in exon 19, making them the most common EGFR mutations. Deletion mutations result when short segments of the DNA are removed (deleted) from the DNA, but without interrupting the blueprint. To use an analogy: in this house, the light switch was deleted from the blueprint, so that the completed house always has the lights on with no way to switch them off.\nAbout 40-45% of the sensitizing mutations are point mutations in exon 21, the most common being L858R (At the “point” in the 858th position, the normal amino acid leucine (L) is switched out for an arginine (R), which changes the protein function). In THIS house, the light switch looks like it is there but has actually been traded for a switch that can’t be turned off. When we talk about “EGFR mutant patients” in other posts, we are by and large talking about the patients with deletion 19 and L858R mutations.\nMost of the remaining mutations don’t cause the EGFR to be sensitive to EGFR TKIs, but more importantly some of them do turn on the EGFR and drive the cancer cell to grow, but actually prevent the TKIs from working, a phenomenon known as resistance. The most important of these is the T790M, a point mutation in exon 20 resulting in the substitution of methionine (M) for threonine (T). This mutation seems to allow the EGFR TK to work much better than normal, so that the TKI no longer has an advantage in binding over the normal ligand, something called ATP.\nMutations (usually in this case called insertion mutations) in exon 20 have also been associated with resistance. The significance of these goes further. We now have evidence that the exon 19 deletion mutations tend to be associated with a higher chance of responding to the TKIs, and that patients with these mutations may live significantly longer than patients with the L858R mutations. This is probably due to differences in how well the TKIs are able to inhibit EGFRsignaling in the two types of mutant EGFR proteins.\nIn conclusion, EGFR mutations are not all created equal and do not all have the same significance. The ones we care about as indicators for using drugs like Tarceva are the deletion 19 mutations and exon 21 point mutations (i.e. L858R), and the one that is most frequently associated with resistance to TKIs is the T790M in exon 20. This is a lot to throw into a short post, so please ask questions in comments if this isn’t clear!\n','','');
/*!40000 ALTER TABLE `sw_drugmutationassociation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sw_manager`
--

DROP TABLE IF EXISTS `sw_manager`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sw_manager` (
  `mg_id` int(11) NOT NULL AUTO_INCREMENT,
  `mg_name` varchar(20) NOT NULL,
  `mg_pwd` varchar(32) NOT NULL,
  `mg_time` int(11) NOT NULL,
  `mg_role_id` tinyint(30) NOT NULL,
  PRIMARY KEY (`mg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sw_manager`
--

LOCK TABLES `sw_manager` WRITE;
/*!40000 ALTER TABLE `sw_manager` DISABLE KEYS */;
INSERT INTO `sw_manager` VALUES (1,'tom','dxzs1991220',1371032570,11),(2,'superking','271785148',1371032570,12),(3,'admin','dxzs1991220',1371032570,0);
/*!40000 ALTER TABLE `sw_manager` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sw_mutation`
--

DROP TABLE IF EXISTS `sw_mutation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sw_mutation` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `GeneID` varchar(64) DEFAULT NULL,
  `GeneName` varchar(64) DEFAULT NULL,
  `Category` varchar(64) DEFAULT NULL,
  `Accession` varchar(64) DEFAULT NULL,
  `AccessionVersion` varchar(64) DEFAULT NULL,
  `Description` varchar(64) DEFAULT NULL,
  `Gene` varchar(10) DEFAULT NULL,
  `DNAsource` varchar(64) DEFAULT NULL,
  `cDNApostion` varchar(64) DEFAULT NULL,
  `Chrom` varchar(100) DEFAULT NULL,
  `Exon` varchar(100) DEFAULT NULL,
  `Codons` varchar(255) DEFAULT NULL,
  `CDSmutationSyntax` varchar(100) DEFAULT NULL,
  `AminoAcidSubstitution` varchar(100) DEFAULT NULL,
  `HgPosition` varchar(100) DEFAULT NULL,
  `RefSNP` varchar(100) DEFAULT NULL,
  `RefSeqatpos` varchar(100) DEFAULT NULL,
  `AlternativeSeq` varchar(100) DEFAULT NULL,
  `DrugSensitivity` varchar(100) DEFAULT NULL,
  `DrugRiskSensitivity` varchar(100) DEFAULT NULL,
  `TargetDrugs` varchar(100) DEFAULT NULL,
  `AssociatedDiseaseName` varchar(100) DEFAULT NULL,
  `ReferenceLink` varchar(100) DEFAULT NULL,
  `MutationDescription` longtext,
  `Operator` varchar(255) DEFAULT NULL,
  `LastUpdated` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sw_mutation`
--

LOCK TABLES `sw_mutation` WRITE;
/*!40000 ALTER TABLE `sw_mutation` DISABLE KEYS */;
INSERT INTO `sw_mutation` VALUES (1,'1956','EGFR\r\n','point mutation\r\n','NM_005228\r\n','3','EGFR mutations (exon 18,19,20,21)\r\n','EGFR\r\n','tissue\r\n','2750','7\r\n','21\r\n','cTg/cGg\r\n','T>G\r\n','L858R\r\n','55191822\r\n','121434568\r\n','T\r\n','G\r\n','Complete Sensitive\r\n','85%\r\n','EGFR inhibibor\r\n','NSCLC\r\n','http://clincancerres.aacrjournals.org/content/17/11/3812.full\r\n','\"c.2573T>G (L858R) ,exon21;Senstive to EGFR inhibitor\nThe EGFR- L858R mutation is deduced by the genotype (T/G) at position 104 in exon 21 .\nExon 21 Genome sequence: (156bp)\nGGCATGAACT ACTTGGAGGA CCGTCGCTTG GTGCACCGCG ACCTGGCAGC CAGGAACGTA\n CTGGTGAAAA CACCGCAGCA TGTCAAGATC ACAGATTTTG GGCT/GGGCCAA ACTGCTGGGT\n GCGGAAGAGA AAGAATACCA TGCAGAAGGA GGCAAA\"\r\n',NULL,NULL);
/*!40000 ALTER TABLE `sw_mutation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sw_reference`
--

DROP TABLE IF EXISTS `sw_reference`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sw_reference` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `ArticalTitle` longtext,
  `Category` longtext,
  `DiseaseType` longtext,
  `Drug` longtext,
  `Biomarker` longtext,
  `Author` longtext,
  `Year` longtext,
  `Journal` longtext,
  `PubmedID` longtext,
  `LastUpdated` datetime DEFAULT NULL,
  `Operator` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=gb2312;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sw_reference`
--

LOCK TABLES `sw_reference` WRITE;
/*!40000 ALTER TABLE `sw_reference` DISABLE KEYS */;
INSERT INTO `sw_reference` VALUES (1,'EGFR exon 19 insertions: a new family of sensitizing EGFR mutations in lung adenocarcinoma\r\n','Mutation Reference\r\n','Non-small lung cancer\r\n','TKI\r\n','EGFR\r\n','Mai He\r\n','2012\r\n','Clin Cancer Res\r\n','22190593\r\n',NULL,NULL),(2,'Idelalisib and Rituximab in Relapsed Chronic Lymphocytic Leukemia\r\n','Treatment reference\r\n','Chronic Lymphocytic Leukemia\r\n','Idelalisib and Rituximab\r\n','PI3Kδ and CD20\r\n','Richard R. Furman\r\n','2014\r\n','The New England Journal of Medicine\r\n','24450857\r\n',NULL,NULL);
/*!40000 ALTER TABLE `sw_reference` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sw_refseqs`
--

DROP TABLE IF EXISTS `sw_refseqs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sw_refseqs` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `Gene` varchar(64) DEFAULT NULL,
  `Accession` varchar(64) DEFAULT NULL,
  `AccessionVersion` int(64) DEFAULT NULL,
  `ExonsStart` int(100) DEFAULT NULL,
  `ExonsEnd` int(10) DEFAULT NULL,
  `ExonsStar` varchar(64) DEFAULT NULL,
  `CDSstart` int(64) DEFAULT NULL,
  `CDSend` int(100) DEFAULT NULL,
  `Sequence` varchar(500) DEFAULT NULL,
  `LastUpdated` datetime DEFAULT NULL,
  `Operator` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sw_refseqs`
--

LOCK TABLES `sw_refseqs` WRITE;
/*!40000 ALTER TABLE `sw_refseqs` DISABLE KEYS */;
INSERT INTO `sw_refseqs` VALUES (1,'ROS1','NM_002944',2,117425855,117288300,'M',200,7243,'CAAGCTTTCAAGCATTCAAAGGTCTAAATGAAAAAGGCTAAGTATTATTTCAAAAGGCAAGTATATCCTAATATAGCAAAACAAACAAAGCAAAATCCATCAGCTACTCCTCCAATTGAAGTGATGAAGCCCAAATAATTCATATAGCAAAATGGAGAAAATTAGACCGGCCATCTAAAAATCTGCCATTGGTGAAGTGATGAAGAACATTTACTGTCTTATTCCGAAGCTTGTCAATTTTGCAACTCTTGGCTGCCTATGGATTTCTGTGGTGCAGTGTACAGTTTTAAATAGCTGCCTAAAGTCGTGTGTAACTAATCTGGGCCAGCAGCTTGACCTTGGCACACCACATAATCTGAGTGAACCGTGTATCCAAGGATGTCACTTTTGGAACTCTGTAGATCAGAAAAACTGTGCTTTAAAGTGTCGGGAGTCGTGTGAGGTTGGCTGTAGCAGCGCGGAAGGTGCATATGAAGAGGAAGTACTGGAAAATGCAGACC',NULL,NULL),(2,'1p19q','2',2,2,22,'2',2,2,'2','2015-12-31 21:05:00','admin');
/*!40000 ALTER TABLE `sw_refseqs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sw_role`
--

DROP TABLE IF EXISTS `sw_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sw_role` (
  `role_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `role_name` varchar(20) NOT NULL COMMENT '角色名称',
  `role_auth_ids` varchar(1000) NOT NULL DEFAULT '' COMMENT '权限ids,1,2,5',
  `role_auth_ac` text COMMENT '模块-操作',
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sw_role`
--

LOCK TABLES `sw_role` WRITE;
/*!40000 ALTER TABLE `sw_role` DISABLE KEYS */;
INSERT INTO `sw_role` VALUES (10,'主管','100,115,116,101,117,118,102,119,120,103,121,122,104,123,124,105,125,126,106,127,128,107,129,130,108,131,132,109,133,134,110,135,136,111,137,138,112,139,140,113,141,142,143,114,144,145','Biomarker-search,Biomarker-tianjia,Biomarkerprimer-search,Biomarkerprimer-tianjia,Mutation-search,Mutation-tianjia,Refseqs-search,Refseqs-tianjia,Drug-search,Drug-tianjia,Disease-search,Disease-tianjia,Diseasemutationassociation-search,Diseasemutationassociation-tianjia,Drugmutationassociation-search,Drugmutationassociation-tianjia,Drugdiseaseassociation-search,Drugdiseaseassociation-tianjia,Treatment-search,Treatment-tianjia,Diseasehs-search,Diseasehs-tianjia,Subset-search,Subset-tianjia,Reference-search,Reference-tianjia,Manager-showlist,Role-showlist,Auth-showlist,Manager-changepasswd,Manager-logout'),(11,'普通管理员','100,115,116,101,117,118,102,119,120,103,121,122,104,123,124,105,125,126,106,127,128,107,129,130,108,131,132,109,133,134,110,135,136,111,137,138,112,139,140,113,141,143,114,144,145','Biomarker-search,Biomarker-tianjia,Biomarkerprimer-search,Biomarkerprimer-tianjia,Mutation-search,Mutation-tianjia,Refseqs-search,Refseqs-tianjia,Drug-search,Drug-tianjia,Disease-search,Disease-tianjia,Diseasemutationassociation-search,Diseasemutationassociation-tianjia,Drugmutationassociation-search,Drugmutationassociation-tianjia,Drugdiseaseassociation-search,Drugdiseaseassociation-tianjia,Treatment-search,Treatment-tianjia,Diseasehs-search,Diseasehs-tianjia,Subset-search,Subset-tianjia,Reference-search,Reference-tianjia,Manager-showlist,Auth-showlist,Manager-changepasswd,Manager-logout'),(12,'编辑员','100,115,116,101,117,118,102,119,120,103,121,122,104,123,124,105,125,126,106,127,128,107,129,130,108,131,132,109,133,134,110,135,136,111,137,138,112,139,140,114,145','Biomarker-search,Biomarker-tianjia,Biomarkerprimer-search,Biomarkerprimer-tianjia,Mutation-search,Mutation-tianjia,Refseqs-search,Refseqs-tianjia,Drug-search,Drug-tianjia,Disease-search,Disease-tianjia,Diseasemutationassociation-search,Diseasemutationassociation-tianjia,Drugmutationassociation-search,Drugmutationassociation-tianjia,Drugdiseaseassociation-search,Drugdiseaseassociation-tianjia,Treatment-search,Treatment-tianjia,DiseaseHs-search,DiseaseHs-tianjia,Subset-search,Subset-tianjia,Reference-search,Reference-tianjia,Manager-logout');
/*!40000 ALTER TABLE `sw_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sw_treatment`
--

DROP TABLE IF EXISTS `sw_treatment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sw_treatment` (
  `ID` int(64) NOT NULL AUTO_INCREMENT,
  `DiseaseName` varchar(64) DEFAULT NULL,
  `DiseaseSubType` varchar(64) DEFAULT NULL,
  `DiseaseStage` varchar(100) DEFAULT NULL,
  `DrugCategory` varchar(64) DEFAULT NULL,
  `Ranking` varchar(64) DEFAULT NULL,
  `Status` varchar(64) DEFAULT NULL,
  `OS_month` varchar(64) DEFAULT NULL,
  `HazardRatio_OS` varchar(100) DEFAULT NULL,
  `CI_OS` varchar(1000) DEFAULT NULL,
  `PFSMonth` varchar(100) DEFAULT NULL,
  `HazardRatio_PFS` varchar(100) DEFAULT NULL,
  `CI_PFS` varchar(100) DEFAULT NULL,
  `ResponseRate` varchar(100) DEFAULT NULL,
  `ComparedControl` varchar(100) DEFAULT NULL,
  `Reference` varchar(100) DEFAULT NULL,
  `WhoCanTake` varchar(100) DEFAULT NULL,
  `EBMlevels` varchar(100) DEFAULT NULL,
  `EvidenceSource` varchar(100) DEFAULT NULL,
  `Description_Chinese` longtext CHARACTER SET gb2312,
  `Drug` varchar(100) DEFAULT NULL,
  `Biomarker` longtext,
  `DrugName` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `Mutation` varchar(100) DEFAULT NULL,
  `ClinicalInformation` longtext CHARACTER SET utf8,
  `ClinicalChineseInformation` longtext CHARACTER SET utf8,
  `SideEffects` longtext,
  `LastUpdated` varchar(100) DEFAULT NULL,
  `Operator` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sw_treatment`
--

LOCK TABLES `sw_treatment` WRITE;
/*!40000 ALTER TABLE `sw_treatment` DISABLE KEYS */;
INSERT INTO `sw_treatment` VALUES (1,'Non-Small Cell Lung Cancer','Non-Small Cell Lung Cancer\r\n','stage IIIb or after','Cancer growth factor','First Line\r\n','FDA Approved 2003\r\n','18.8\r\n','0.36\r\n','none\r\n','9.6\r\n','none\r\n','none\r\n','none\r\n','chemotherapy \r\n','2303,2256,41,70,75,2259,2260,2261,140,2258\r\n','EGFR positive NSCLC\r\n','1a','FDA','吉非替尼【Gefitinib】\r\n','Gefitinib (Iressa)\r\n','\"EGFR mutation, No MET Amplification,MET causes gefitinib resistance by driving ERBB3 (HER3)\n1,Exon 19 deletions; L858R  ~90% of all EGFR mutation  Yes \n 2, T790M/exon 19 deletions; T790M/L858R; G719X; L861Q; S7681  ~7%  Limited\n 3, T790M alone; exon 20 insertions; other mutations  ~3%  None\nThese mutations are more commonly seen in Asians, women, and non-smokers (who also tend to more often have adenocarcinoma)\"\r\n','Gefitinib\r\n','KRAS Mutation (Codon 12,13,61)-significat resistant\r\n','cross, unlike IPASS trial, being the benefit of gefitinib over chemotherapy consistent at any time of treatment. Response rate was 62.1% and 32.2% with gefitinib and chemotherapy, respectively (). Myelosuppression, alopecia and fatigue were more frequent in the cisplatin-docetaxel group, while skin toxicity, liver dysfunction, and diarrhea in the gefitinib group.\r\n\r\nAnother prospective phase III study, the NEJ002 Trial, compared gefitinib to chemotherapy with carboplatin and paclitaxel as a first-line treatment in advanced NSCLC patients selected for EGFR mutation. The study was stopped by independent data and safety monitoring committee after the preplanned interim analysis, conducted 4 months after the 200th patient enrolled, because it showed a significant difference in progression-free survival between the two treatment groups. The median progression-free survival was 10.4 months versus 5.5 months for gefitinib and chemotherapy, respectively (HR 0.36, 95% CI: 0.25–0.51, ), and the final analysis confirmed these results, showing a median PFS of 10.8 versus 5.4 months for gefitinib and chemotherapy, respectively (HR 0.30, 95% CI 0.22–0.41, ). The response rate was significantly higher in the gefitinib than chemotherapy arm (73.7% versus 30.7%, ). The median progression-free survival and overall survival did not differ significantly between patients with exon 19 deletion and those with L858R point mutation (11.5 months versus 10.8 months, resp.). The overall survival did not differ significantly between the two treatment groups (median survival time and the 2-year survival rate were 30.5 months and 61.4% for gefitinib group as compared with 23.6 months and 46.7% for the chemotherapy, resp., ). Importantly, among 112 patients who had completed first-line carboplatin-paclitaxel, 106 (94.6%) received second-line gefitinib and 58.5% of these patients had a response. The most common adverse events in the gefitinib group were rash and elevated levels of aspartate aminotransferase or alanine aminotransferase and, in the chemotherapy arm, appetite loss, neutropenia, anemia, and sensory neuropathy. Interstitial lung disease was reported in 6 patients (5.3%) in the gefitinib arm, with one of these fatal. In general, the incidence of severe toxic effects (NCI-CTC ≥ 3) was significantly higher in the chemotherapy group than in the gefitinib group (71.7% versus 41.2%, ).\r\n\r\nTherefore, these both studies confirmed gefitinib to be superior to chemotherapy in terms of response rate and progression-free survival in patients with EGFR mutations.\r\n\r\nUncommon Mutation List Reference: Uncommon Epidermal Growth Factor Receptor mutations in non-small cell lung cancer and their mechanisms of EGFR tyrosine kinase inhibitors sensitivity and resistance; Author: Erminia Massarelli','','\"Acne-like rash is reported very commonly. Other common adverse effects (>1% of patients) include: diarrhoea, nausea, vomiting, anorexia, stomatitis, dehydration, skin reactions, paronychia, asymptomatic elevations of liver enzymes, asthenia, conjunctivitis, blepharitis.[9]\nInfrequent adverse effects (0.1–1% of patients) include: interstitial lung disease, corneal erosion, aberrant eyelash and hair growth\"\r\n',NULL,NULL);
/*!40000 ALTER TABLE `sw_treatment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sw_user`
--

DROP TABLE IF EXISTS `sw_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sw_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `username` varchar(128) NOT NULL DEFAULT '' COMMENT '登录名',
  `password` varchar(32) NOT NULL DEFAULT '' COMMENT '登录密码',
  `user_email` varchar(64) NOT NULL DEFAULT '' COMMENT '邮箱',
  `user_sex` tinyint(4) NOT NULL DEFAULT '1' COMMENT '性别',
  `user_qq` varchar(32) NOT NULL DEFAULT '' COMMENT 'qq',
  `user_tel` varchar(32) NOT NULL DEFAULT '' COMMENT '手机',
  `user_xueli` tinyint(4) NOT NULL DEFAULT '1' COMMENT '学历',
  `user_hobby` varchar(32) NOT NULL DEFAULT '' COMMENT '爱好',
  `user_introduce` text COMMENT '简介',
  `user_time` int(11) DEFAULT NULL,
  `last_time` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8 COMMENT='会员表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sw_user`
--

LOCK TABLES `sw_user` WRITE;
/*!40000 ALTER TABLE `sw_user` DISABLE KEYS */;
INSERT INTO `sw_user` VALUES (1,'zhangsanff','1234','zhangsan@163.com',1,'','',1,'','',NULL,0),(3,'jack','jack','tom@163.com',1,'','',1,'',NULL,NULL,0),(98,'linken','abcd','lin@q.com',1,'78347832','13245671234',4,'','I am linken',NULL,0),(100,'tom','tom','tom@q.com',3,'263872','13465432345',5,'1,3','I am tom',NULL,0);
/*!40000 ALTER TABLE `sw_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-05-16 17:37:34
