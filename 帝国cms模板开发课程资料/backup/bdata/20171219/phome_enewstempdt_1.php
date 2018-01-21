<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `phome_enewstempdt`;");
E_C("CREATE TABLE `phome_enewstempdt` (
  `tempid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `tempvar` char(30) NOT NULL DEFAULT '',
  `tempname` char(30) NOT NULL DEFAULT '',
  `tempsay` char(255) NOT NULL DEFAULT '',
  `tempfile` char(200) NOT NULL DEFAULT '',
  `myorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `temptype` char(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`tempid`),
  UNIQUE KEY `tempvar` (`tempvar`),
  KEY `temptype` (`temptype`),
  KEY `myorder` (`myorder`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewstempdt` values('1',0x686561646572,0xe4b8bbe7958ce99da2e5a4b4e983a8,0xe4b8bbe7958ce99da2e5a4b4e983a8,0x652f74656d706c6174652f696e6366696c652f6865616465722e706870,'0',0x696e6366696c65);");
E_D("replace into `phome_enewstempdt` values('2',0x666f6f746572,0xe4b8bbe7958ce99da2e5b0bee983a8,0xe4b8bbe7958ce99da2e5b0bee983a8,0x652f74656d706c6174652f696e6366696c652f666f6f7465722e706870,'0',0x696e6366696c65);");
E_D("replace into `phome_enewstempdt` values('3',0x71446f496e666f,0xe7aea1e79086e68a95e7a8bfe9a696e9a1b5,0xe7aea1e79086e68a95e7a8bfe9a696e9a1b5,0x652f74656d706c6174652f446f496e666f2f446f496e666f2e706870,'0',0x646f696e666f);");
E_D("replace into `phome_enewstempdt` values('4',0x714368616e6765436c617373,0xe68a95e7a8bfe98089e68ba9e6a08fe79baee9a1b5,0xe68a95e7a8bfe98089e68ba9e6a08fe79baee9a1b5,0x652f74656d706c6174652f446f496e666f2f4368616e6765436c6173732e706870,'0',0x646f696e666f);");
E_D("replace into `phome_enewstempdt` values('5',0x71446f496e666f5472616e,0xe58f91e5b883e68a95e7a8bfe4b88ae4bca0e99984e4bbb6e9a1b5e99da2,0xe58f91e5b883e68a95e7a8bfe4b88ae4bca0e99984e4bbb6e9a1b5e99da2,0x652f74656d706c6174652f446f496e666f2f7472616e2e706870,'0',0x646f696e666f);");
E_D("replace into `phome_enewstempdt` values('6',0x71416464496e666f,0xe58f91e5b883e68a95e7a8bfe9a1b5,0xe58f91e5b883e68a95e7a8bfe9a1b5,0x652f74656d706c6174652f446f496e666f2f416464496e666f2e706870,'0',0x646f696e666f);");
E_D("replace into `phome_enewstempdt` values('7',0x714c697374496e666f,0xe9bb98e8aea4e7aea1e79086e68a95e7a8bfe58897e8a1a8e9a1b5,0xe9bb98e8aea4e7aea1e79086e68a95e7a8bfe58897e8a1a8e9a1b5,0x652f646174612f68746d6c2f6c6973742f716c697374696e666f2e706870,'0',0x646f696e666f);");
E_D("replace into `phome_enewstempdt` values('8',0x7265706f7274,0xe68f90e4baa4e99499e8afafe68aa5e5918ae9a1b5e99da2,0xe68f90e4baa4e99499e8afafe68aa5e5918ae9a1b5e99da2,0x652f74656d706c6174652f7075626c69632f7265706f72742e706870,'0',0x70756274656d70);");
E_D("replace into `phome_enewstempdt` values('9',0x706179617069,0xe59ca8e7babfe694afe4bb98e9a1b5e99da2,0xe59ca8e7babfe694afe4bb98e9a1b5e99da2,0x652f74656d706c6174652f7061796170692f7061796170692e706870,'0',0x70756274656d70);");
E_D("replace into `phome_enewstempdt` values('10',0x696e666f766f7465,0xe4bfa1e681afe68a95e7a5a8e9a1b5e99da2,0xe4bfa1e681afe68a95e7a5a8e9a1b5e99da2,0x652f74656d706c6174652f7075626c69632f766f74652e706870,'0',0x70756274656d70);");
E_D("replace into `phome_enewstempdt` values('11',0x766f7465,0xe68a95e7a5a8e68f92e4bbb6e9a1b5e99da2,0xe68a95e7a5a8e68f92e4bbb6e9a1b5e99da2,0x652f74656d706c6174652f746f6f6c2f766f74652e706870,'0',0x70756274656d70);");
E_D("replace into `phome_enewstempdt` values('12',0x53686f70427572636172,0xe8b4ade789a9e8bda6e9a1b5e99da2,0xe8b4ade789a9e8bda6e9a1b5e99da2,0x652f74656d706c6174652f53686f705379732f6275796361722e706870,'0',0x73686f70737973);");
E_D("replace into `phome_enewstempdt` values('13',0x53686f704f72646572,0xe68f90e4baa4e8aea2e58d95e9a1b5e99da2,0xe68f90e4baa4e8aea2e58d95e9a1b5e99da2,0x652f74656d706c6174652f53686f705379732f6f726465722e706870,'0',0x73686f70737973);");
E_D("replace into `phome_enewstempdt` values('14',0x53686f705375626d69744f72646572,0xe7a1aee8aea4e68f90e4baa4e8aea2e58d95e9a1b5e99da2,0xe7a1aee8aea4e68f90e4baa4e8aea2e58d95e9a1b5e99da2,0x652f74656d706c6174652f53686f705379732f5375626d69744f726465722e706870,'0',0x73686f70737973);");
E_D("replace into `phome_enewstempdt` values('15',0x53686f704c6973744464,0xe8aea2e58d95e58897e8a1a8e9a1b5e99da2,0xe8aea2e58d95e58897e8a1a8e9a1b5e99da2,0x652f74656d706c6174652f53686f705379732f4c69737444642e706870,'0',0x73686f70737973);");
E_D("replace into `phome_enewstempdt` values('16',0x53686f7053686f774464,0xe8aea2e58d95e8afa6e7bb86e9a1b5e99da2,0xe8aea2e58d95e8afa6e7bb86e9a1b5e99da2,0x652f74656d706c6174652f53686f705379732f53686f7744642e706870,'0',0x73686f70737973);");
E_D("replace into `phome_enewstempdt` values('17',0x53686f70427572636172466f726d,0xe8b4ade789a9e8bda62de58aa0e585a5e8a1a8e58d95e6a8a1e69dbf,0xe8b4ade789a9e8bda62de58aa0e585a5e8a1a8e58d95e6a8a1e69dbf,0x652f74656d706c6174652f53686f705379732f6275796361722f6275796361725f666f726d2e706870,'0',0x73686f70737973);");
E_D("replace into `phome_enewstempdt` values('18',0x53686f704275726361724f72646572,0xe8b4ade789a9e8bda62de7a1aee8aea4e8aea2e58d95e6a8a1e69dbf,0xe8b4ade789a9e8bda62de7a1aee8aea4e8aea2e58d95e6a8a1e69dbf,0x652f74656d706c6174652f53686f705379732f6275796361722f6275796361725f6f726465722e706870,'0',0x73686f70737973);");
E_D("replace into `phome_enewstempdt` values('19',0x53686f7042757263617253686f776464,0xe8b4ade789a9e8bda62de698bee7a4bae8aea2e58d95e6a8a1e69dbf,0xe8b4ade789a9e8bda62de698bee7a4bae8aea2e58d95e6a8a1e69dbf,0x652f74656d706c6174652f53686f705379732f6275796361722f6275796361725f73686f7764642e706870,'0',0x73686f70737973);");
E_D("replace into `phome_enewstempdt` values('20',0x53686f7041646441646472657373,0xe5a29ee58aa0e9858de98081e59cb0e59d80e9a1b5e99da2,0xe5a29ee58aa0e9858de98081e59cb0e59d80e9a1b5e99da2,0x652f74656d706c6174652f53686f705379732f416464416464726573732e706870,'0',0x73686f70737973);");
E_D("replace into `phome_enewstempdt` values('21',0x53686f704c69737441646472657373,0xe7aea1e79086e9858de98081e59cb0e59d80e9a1b5e99da2,0xe7aea1e79086e9858de98081e59cb0e59d80e9a1b5e99da2,0x652f74656d706c6174652f53686f705379732f4c697374416464726573732e706870,'0',0x73686f70737973);");
E_D("replace into `phome_enewstempdt` values('22',0x4d656d626572526567,0xe4bc9ae59198e6b3a8e5868ce9a1b5e99da2,0xe4bc9ae59198e6b3a8e5868ce9a1b5e99da2,0x652f74656d706c6174652f6d656d6265722f72656769737465722e706870,'0',0x6d656d626572);");
E_D("replace into `phome_enewstempdt` values('23',0x4d656d6265724368616e6765526567,0xe98089e68ba9e6b3a8e5868ce7b1bbe59e8be9a1b5e99da2,0xe98089e68ba9e6b3a8e5868ce7b1bbe59e8be9a1b5e99da2,0x652f74656d706c6174652f6d656d6265722f4368616e676552656769737465722e706870,'0',0x6d656d626572);");
E_D("replace into `phome_enewstempdt` values('24',0x4d656d62657252656773656e64,0xe9878de58f91e6b3a8e5868ce6bf80e6b4bbe982aee4bbb6e9a1b5e99da2,0xe9878de58f91e6b3a8e5868ce6bf80e6b4bbe982aee4bbb6e9a1b5e99da2,0x652f74656d706c6174652f6d656d6265722f72656773656e642e706870,'0',0x6d656d626572);");
E_D("replace into `phome_enewstempdt` values('25',0x4d656d6265724c6f67696e,0xe4bc9ae59198e799bbe5bd95e9a1b5e99da2,0xe4bc9ae59198e799bbe5bd95e9a1b5e99da2,0x652f74656d706c6174652f6d656d6265722f6c6f67696e2e706870,'0',0x6d656d626572);");
E_D("replace into `phome_enewstempdt` values('26',0x4d656d6265724c6f67696e6f70656e,0xe4bc9ae59198e799bbe5bd95e5bcb9e587bae9a1b5e99da2,0xe4bc9ae59198e799bbe5bd95e5bcb9e587bae9a1b5e99da2,0x652f74656d706c6174652f6d656d6265722f6c6f67696e6f70656e2e706870,'0',0x6d656d626572);");
E_D("replace into `phome_enewstempdt` values('27',0x4d656d62657245646974696e666f,0xe4bfaee694b9e4bc9ae59198e4bfa1e681afe9a1b5e99da2,0xe4bfaee694b9e4bc9ae59198e4bfa1e681afe9a1b5e99da2,0x652f74656d706c6174652f6d656d6265722f45646974496e666f2e706870,'0',0x6d656d626572);");
E_D("replace into `phome_enewstempdt` values('28',0x4d656d6265724564697473616665696e666f,0xe4bfaee694b9e4bc9ae59198e5ae89e585a8e4bfa1e681afe9a1b5e99da2,0xe4bfaee694b9e4bc9ae59198e5ae89e585a8e4bfa1e681afe9a1b5e99da2,0x652f74656d706c6174652f6d656d6265722f4564697453616665496e666f2e706870,'0',0x6d656d626572);");
E_D("replace into `phome_enewstempdt` values('29',0x4d656d62657247657450617373776f7264,0xe58f96e59b9ee5af86e7a081e9a1b5e99da2,0xe58f96e59b9ee5af86e7a081e9a1b5e99da2,0x652f74656d706c6174652f6d656d6265722f47657450617373776f72642e706870,'0',0x6d656d626572);");
E_D("replace into `phome_enewstempdt` values('30',0x4d656d626572476574526573657450617373,0xe58f96e59b9ee5af86e7a081e9878de7bdaee9a1b5e99da2,0xe58f96e59b9ee5af86e7a081e9878de7bdaee9a1b5e99da2,0x652f74656d706c6174652f6d656d6265722f676574706173732e706870,'0',0x6d656d626572);");
E_D("replace into `phome_enewstempdt` values('31',0x4d656d6265724370,0xe4bc9ae59198e4b8ade5bf83e9a696e9a1b5,0xe4bc9ae59198e4b8ade5bf83e9a696e9a1b5,0x652f74656d706c6174652f6d656d6265722f63702e706870,'0',0x6d656d626572);");
E_D("replace into `phome_enewstempdt` values('32',0x4d656d6265724d79,0xe4bc9ae59198e78ab6e68081e9a1b5e99da2,0xe4bc9ae59198e78ab6e68081e9a1b5e99da2,0x652f74656d706c6174652f6d656d6265722f6d792e706870,'0',0x6d656d626572);");
E_D("replace into `phome_enewstempdt` values('33',0x4d656d62657253686f77496e666f,0xe69fa5e79c8be4bc9ae59198e4bfa1e681afe9a1b5e99da2,0xe69fa5e79c8be4bc9ae59198e4bfa1e681afe9a1b5e99da2,0x652f74656d706c6174652f6d656d6265722f53686f77496e666f2e706870,'0',0x6d656d626572);");
E_D("replace into `phome_enewstempdt` values('34',0x4d656d6265724c69737431,0xe9bb98e8aea4e4bc9ae59198e58897e8a1a8e9a1b5e99da2,0xe9bb98e8aea4e4bc9ae59198e58897e8a1a8e9a1b5e99da2,0x652f74656d706c6174652f6d656d6265722f6d656d6265726c6973742f312e706870,'0',0x6d656d626572);");
E_D("replace into `phome_enewstempdt` values('35',0x4d656d6265724164644d7367,0xe58f91e98081e7ab99e58685e6b688e681afe9a1b5e99da2,0xe58f91e98081e7ab99e58685e6b688e681afe9a1b5e99da2,0x652f74656d706c6174652f6d656d6265722f4164644d73672e706870,'0',0x6d656d6265726d7367);");
E_D("replace into `phome_enewstempdt` values('36',0x4d656d6265724d7367,0xe7ab99e58685e6b688e681afe58897e8a1a8e9a1b5e99da2,0xe7ab99e58685e6b688e681afe58897e8a1a8e9a1b5e99da2,0x652f74656d706c6174652f6d656d6265722f6d73672e706870,'0',0x6d656d6265726d7367);");
E_D("replace into `phome_enewstempdt` values('37',0x4d656d626572566965774d7367,0xe69fa5e79c8be7ab99e58685e6b688e681afe9a1b5e99da2,0xe69fa5e79c8be7ab99e58685e6b688e681afe9a1b5e99da2,0x652f74656d706c6174652f6d656d6265722f566965774d73672e706870,'0',0x6d656d6265726d7367);");
E_D("replace into `phome_enewstempdt` values('38',0x4d656d626572416464467269656e64,0xe5a29ee58aa0e5a5bde58f8be9a1b5e99da2,0xe5a29ee58aa0e5a5bde58f8be9a1b5e99da2,0x652f74656d706c6174652f6d656d6265722f416464467269656e642e706870,'0',0x6d656d626572667269656e64);");
E_D("replace into `phome_enewstempdt` values('39',0x4d656d626572467269656e64,0xe5a5bde58f8be58897e8a1a8e9a1b5e99da2,0xe5a5bde58f8be58897e8a1a8e9a1b5e99da2,0x652f74656d706c6174652f6d656d6265722f667269656e642e706870,'0',0x6d656d626572667269656e64);");
E_D("replace into `phome_enewstempdt` values('40',0x4d656d626572467269656e64436c617373,0xe5a5bde58f8be58886e7b1bbe9a1b5e99da2,0xe5a5bde58f8be58886e7b1bbe9a1b5e99da2,0x652f74656d706c6174652f6d656d6265722f467269656e64436c6173732e706870,'0',0x6d656d626572667269656e64);");
E_D("replace into `phome_enewstempdt` values('41',0x4d656d6265724368616e6765467269656e64,0xe98089e68ba9e5a5bde58f8be9a1b5e99da2,0xe98089e68ba9e5a5bde58f8be9a1b5e99da2,0x652f74656d706c6174652f6d656d6265722f4368616e6765467269656e642e706870,'0',0x6d656d626572667269656e64);");
E_D("replace into `phome_enewstempdt` values('42',0x4d656d62657241646446617661,0xe5a29ee58aa0e694b6e8978fe4bfa1e681afe9a1b5e99da2,0xe5a29ee58aa0e694b6e8978fe4bfa1e681afe9a1b5e99da2,0x652f74656d706c6174652f6d656d6265722f416464466176612e706870,'0',0x6d656d626572666176);");
E_D("replace into `phome_enewstempdt` values('43',0x4d656d62657246617661,0xe7aea1e79086e694b6e8978fe9a1b5e99da2,0xe7aea1e79086e694b6e8978fe9a1b5e99da2,0x652f74656d706c6174652f6d656d6265722f666176612e706870,'0',0x6d656d626572666176);");
E_D("replace into `phome_enewstempdt` values('44',0x4d656d62657246617661436c617373,0xe7aea1e79086e694b6e8978fe58886e7b1bbe9a1b5e99da2,0xe7aea1e79086e694b6e8978fe58886e7b1bbe9a1b5e99da2,0x652f74656d706c6174652f6d656d6265722f46617661436c6173732e706870,'0',0x6d656d626572666176);");
E_D("replace into `phome_enewstempdt` values('45',0x4d656d62657242757962616b,0xe58585e580bce8aeb0e5bd95e9a1b5e99da2,0xe58585e580bce8aeb0e5bd95e9a1b5e99da2,0x652f74656d706c6174652f6d656d6265722f62757962616b2e706870,'0',0x6d656d6265726f74686572);");
E_D("replace into `phome_enewstempdt` values('46',0x4d656d626572446f776e62616b,0xe4b88be8bdbde8aeb0e5bd95e9a1b5e99da2,0xe4b88be8bdbde8aeb0e5bd95e9a1b5e99da2,0x652f74656d706c6174652f6d656d6265722f646f776e62616b2e706870,'0',0x6d656d6265726f74686572);");
E_D("replace into `phome_enewstempdt` values('47',0x4d656d62657242757967726f7570,0xe8b4ade4b9b0e4bc9ae59198e7b1bbe59e8be9a1b5e99da2,0xe8b4ade4b9b0e4bc9ae59198e7b1bbe59e8be9a1b5e99da2,0x652f74656d706c6174652f6d656d6265722f62757967726f75702e706870,'0',0x6d656d6265726f74686572);");
E_D("replace into `phome_enewstempdt` values('48',0x4d656d62657243617264,0xe782b9e58da1e58585e580bce9a1b5e99da2,0xe782b9e58da1e58585e580bce9a1b5e99da2,0x652f74656d706c6174652f6d656d6265722f636172642e706870,'0',0x6d656d6265726f74686572);");
E_D("replace into `phome_enewstempdt` values('49',0x4d656d6265724368616e67655374796c65,0xe98089e68ba9e4bc9ae59198e7a9bae997b4e9a38ee6a0bce9a1b5e99da2,0xe98089e68ba9e4bc9ae59198e7a9bae997b4e9a38ee6a0bce9a1b5e99da2,0x652f74656d706c6174652f6d656d6265722f6d73706163652f4368616e67655374796c652e706870,'0',0x6d656d6265727370616365);");
E_D("replace into `phome_enewstempdt` values('50',0x4d656d6265725365745370616365,0xe8aebee7bdaee4bc9ae59198e7a9bae997b4e9a1b5e99da2,0xe8aebee7bdaee4bc9ae59198e7a9bae997b4e9a1b5e99da2,0x652f74656d706c6174652f6d656d6265722f6d73706163652f53657453706163652e706870,'0',0x6d656d6265727370616365);");
E_D("replace into `phome_enewstempdt` values('51',0x4d656d626572466565646261636b,0xe7aea1e79086e4bc9ae59198e7a9bae997b4e58f8de9a688e9a1b5e99da2,0xe7aea1e79086e4bc9ae59198e7a9bae997b4e58f8de9a688e9a1b5e99da2,0x652f74656d706c6174652f6d656d6265722f6d73706163652f666565646261636b2e706870,'0',0x6d656d6265727370616365);");
E_D("replace into `phome_enewstempdt` values('52',0x4d656d62657253686f77466565646261636b,0xe69fa5e79c8be4bc9ae59198e7a9bae997b4e58f8de9a688e9a1b5e99da2,0xe69fa5e79c8be4bc9ae59198e7a9bae997b4e58f8de9a688e9a1b5e99da2,0x652f74656d706c6174652f6d656d6265722f6d73706163652f53686f77466565646261636b2e706870,'0',0x6d656d6265727370616365);");
E_D("replace into `phome_enewstempdt` values('53',0x4d656d62657247626f6f6b,0xe7aea1e79086e4bc9ae59198e7a9bae997b4e79599e8a880e9a1b5e99da2,0xe7aea1e79086e4bc9ae59198e7a9bae997b4e79599e8a880e9a1b5e99da2,0x652f74656d706c6174652f6d656d6265722f6d73706163652f67626f6f6b2e706870,'0',0x6d656d6265727370616365);");
E_D("replace into `phome_enewstempdt` values('54',0x4d656d626572526547626f6f6b,0xe59b9ee5a48de4bc9ae59198e7a9bae997b4e79599e8a880e9a1b5e99da2,0xe59b9ee5a48de4bc9ae59198e7a9bae997b4e79599e8a880e9a1b5e99da2,0x652f74656d706c6174652f6d656d6265722f6d73706163652f526547626f6f6b2e706870,'0',0x6d656d6265727370616365);");
E_D("replace into `phome_enewstempdt` values('55',0x4d656d626572436f6e6e6563744c69737442696e64,0xe799bbe5bd95e7bb91e5ae9ae7aea1e79086e9a1b5e99da2,0xe799bbe5bd95e7bb91e5ae9ae7aea1e79086e9a1b5e99da2,0x652f74656d706c6174652f6d656d626572636f6e6e6563742f4c69737442696e642e706870,'0',0x6d656d626572636f6e6e656374);");
E_D("replace into `phome_enewstempdt` values('56',0x4d656d626572436f6e6e656374546f62696e64,0xe7bb91e5ae9ae799bbe5bd95e5b890e58fb7e9a1b5e99da2,0xe7bb91e5ae9ae799bbe5bd95e5b890e58fb7e9a1b5e99da2,0x652f74656d706c6174652f6d656d626572636f6e6e6563742f746f62696e642e706870,'0',0x6d656d626572636f6e6e656374);");

require("../../inc/footer.php");
?>