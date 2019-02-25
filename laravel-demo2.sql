/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50553
 Source Host           : localhost:3306
 Source Schema         : laravel-demo2

 Target Server Type    : MySQL
 Target Server Version : 50553
 File Encoding         : 65001

 Date: 25/02/2019 18:04:32
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admins
-- ----------------------------
DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id',
  `account` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '账号',
  `password` char(64) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '密码',
  `status` tinyint(2) UNSIGNED NOT NULL DEFAULT 1 COMMENT '状态:1.正常;2.冻结',
  `token` char(64) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '登录token',
  `last_login_time` int(11) UNSIGNED NULL DEFAULT 0 COMMENT '上次登录时间',
  `created_at` timestamp NULL DEFAULT NULL COMMENT '创建时间',
  `updated_at` timestamp NULL DEFAULT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '后台管理员表' ROW_FORMAT = Compact;

-- ----------------------------
-- Records of admins
-- ----------------------------
INSERT INTO `admins` VALUES (1, 'admin', '13737b8b732b8128b6dc35588badc3a5', 1, '$2y$10$uAImv72pXWtR5U6vooK/x.a0xo0ov7rDUzfqxJXT4rZcjwFAJQ3tu', 1551078911, '2019-01-31 11:40:35', '2019-02-25 15:15:11');

-- ----------------------------
-- Table structure for articles
-- ----------------------------
DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '标题',
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '内容',
  `abstract` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '摘要',
  `user_id` int(11) NOT NULL DEFAULT 0 COMMENT '用户id',
  `scan_num` int(11) NOT NULL DEFAULT 0 COMMENT '浏览次数',
  `comment_num` int(11) NOT NULL DEFAULT 0 COMMENT '评论人数',
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '分类状态:1.可用;2.不可用',
  `cover_img` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT '' COMMENT '封面图',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` int(255) UNSIGNED NOT NULL DEFAULT 1 COMMENT '角色id',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES (1, '习近平给领导干部上的“公开课”', '<p>新年以来，在几次会议上发表重要讲话、在《求是》杂志上发表重要文章、中央政治局第十二次集体学习媒体融合的生动“实践课”……习近平总书记延续他十八大以来的一贯风格，反复强调领导干部的思想修养和行为规范，不仅谆谆教诲，亦躬身实践，为广大领导干部上了一堂堂生动的“公开课”。</p><div><p><strong>理论课 提要求立标准</strong></p><p>&nbsp;</p><p><img src=\\\"http://p1.img.cctvpic.com/photoworkspace/contentimg/2019/01/30/2019013001503494216.jpg\\\" alt=\\\" \\\" width=\\\"500\\\" isflag=\\\"1\\\"></p><p>2018年7月3日至4日，习近平出席全国组织工作会议并发表重要讲话。 （来源：新华社）</p><p>对于领导干部的要求，习近平在2018年7月召开的全国组织工作会议上有一段非常精炼的概括：<strong>要教育引导干部加强党性修养、筑牢信仰之基，加强政德修养、打牢从政之基，严守纪律规矩、夯实廉政之基，健全基本知识体系、强化能力之基。</strong></p><p>党性是党员干部立身、立业、立言、立德的基石。习近平反复强调党性修养的重要性：“对马克思主义的信仰，对社会主义和共产主义的信念，是共产党人的政治灵魂”“要把坚定理想信念作为党的思想建设的首要任务”“挺起共产党人的精神脊梁”。他要求领导干部“要把理想信念时时处处体现为行动的力量，树立起让人看得见、感受得到的理想信念标杆”。</p><p>人无德不立，官无德不为。早在浙江工作期间，习近平就曾经在《用权讲官德 交往有原则》一文中指出：所谓官德，也就是从政道德，是为官当政者从政德行的综合反映。党的十八大以来，习近平一直重视领导干部的思想道德修养。2018年3月10日，全国两会期间，习近平在参加重庆代表团审议时专门阐释了立政德的三个标准：明大德、守公德、严私德。他要求领导干部在政治品德、职业道德、社会公德、家庭美德等方面都要过硬，而“最重要的是政治品德要过得硬”。</p><p>奢靡之始，危亡之渐。习近平深谙“成由勤俭败由奢”的道理，从关乎党的生死存亡的高度反复强调反腐。不久前召开的十九届中央纪委三次全会上，习近平用了“五个必须”深刻总结改革开放40年来坚持党的领导、从严管党治党的宝贵经验，并对下一轮全面从严治党作出战略部署。</p><p>德才兼备，必须要有过硬本领。习近平要求领导干部要增强政治领导本领，坚持战略思维、创新思维、辩证思维、法治思维、底线思维；增强改革创新本领，保持锐意进取的精神风貌；增强科学发展本领，善于贯彻新发展理念；增强群众工作本领，创新群众工作体制机制和方式方法；增强驾驭风险本领，善于处理各种复杂矛盾……</p></div><div><p><strong>事例课 举例子树榜样</strong></p><p>&nbsp;</p><p>理论结合实例才能更加令人难忘、发人深省。习近平“点赞”过的好干部，生动诠释了总书记对于领导干部的各项要求。</p><p><img src=\\\"http://p1.img.cctvpic.com/photoworkspace/contentimg/2019/01/30/2019013001510456371.jpg\\\" alt=\\\" \\\" isflag=\\\"1\\\"></p><p>1990年7月16日，习近平在《福州晚报》上发表的《念奴娇·追思焦裕禄》。</p><p>“魂飞万里，盼归来，此水此山此地。百姓谁不爱好官？把泪焦桐成雨……”</p><p>1990年7月15日，时任福州市委书记的习近平在夜读纪念焦裕禄的文章后，感慨万千，填就了这阕《念奴娇·追思焦裕禄》。</p><p>“直到生命的最后一刻，焦裕禄始终保持人民公仆的本色，想的仍然是人民群众的幸福安康，充分体现了共产党人立党为公、执政为民的崇高风范。”</p><p><img src=\\\"http://p1.img.cctvpic.com/photoworkspace/contentimg/2019/01/30/2019013001513365870.jpg\\\" alt=\\\" \\\" width=\\\"500\\\" isflag=\\\"1\\\"></p><p>焦裕禄在泡桐树前留影（资料照片）&nbsp; 新华社发</p><p>在习近平心中，焦裕禄一直是好干部的典型。</p><p>2004年11月15日，在《执政意识和执政素质至关重要》一文中，习近平深情写道：“像领导干部的好榜样焦裕禄、孔繁森、郑培民等英模人物那样，做一个亲民爱民的公仆，做一个忠诚正直的党员，做一个靠得住、有本事、过得硬、不变质的领导干部。”</p><p>党的十八大以来，习近平也点赞过很多好干部。</p><p>四川省北川羌族自治县原副县长兰辉是老百姓念叨的“车轮子县长”，30年扎根在基层、战斗在一线，习近平批示兰辉是用生命践行党的群众路线的好干部，是新时期共产党人的楷模；内蒙古自治区党委原常委、呼和浩特市原市委书记牛玉儒，把毕生精力奉献给了他所热爱的人民和草原，习近平称赞牛玉儒是新时期广大党员干部的楷模；好法官邹碧华在司法改革中甘当“燃灯者”，敢啃硬骨头，习近平评价邹碧华是新时期公正为民的好法官、敢于担当的好干部……</p></div><div><p><strong>示范课 亲身实践带头做</strong></p><p>&nbsp;</p><p>口言之，身必行之。“好干部”该如何做？习近平率先垂范。</p><p><strong>加强党性修养，习近平以身作则。</strong>习近平的父亲习仲勋和母亲齐心都很早参加革命。习近平曾在给父亲的信中写道，即使身处逆境，“爸爸对共产主义的信念仍坚定不移，相信我们的党是伟大的、正确的、光荣的。您的言行为我们指明了正确的前进方向。”</p><p>习近平在父母身上汲取了前行的力量。他年轻时先后写了8份入团申请书、10份入党申请书。他对家人也要求严格，经常告诫亲朋好友：“不能在我工作的地方从事任何商业活动，不能打我的旗号办任何事，否则别怪我六亲不认。”</p><p><strong>加强政德修养，习近平一以贯之。</strong>翻开习近平的工作履历，在梁家河任大队书记，修淤地坝、搞梯田，他带着乡亲们光脚站在冰水里干活；在正定工作三年多，他经常骑车下乡调研，走遍了全县每一个村，带领百姓脱贫致富；在福州，他大力倡导“马上就办”，推行“四个万家”，曾带领市区领导两天接待逾700位来访群众；主政浙江，他9个月跑了69个县(市、区)，推进落实“八八战略”，把浙江带上发展快车道。</p><p>德莫高于爱民。从政40多年来，习近平始终将人民放在最高位置，将人民对美好生活的向往作为自己的奋斗目标。</p><p><img src=\\\"http://p1.img.cctvpic.com/photoworkspace/contentimg/2019/01/30/2019013001521997193.jpg\\\" alt=\\\" \\\" isflag=\\\"1\\\"></p><p>图为：习近平2015年看望陕西省梁家河村村民时，在时任梁家河大队党支部书记梁玉明家的午餐费用收据（复制件）；习近平2012年考察河北省阜平县时的晚餐菜单（复制件）；习近平2014年考察河南省兰考县时的餐费收据（复制件）。 资料来自：学习大国</p><p><strong>抓作风建设，习近平率先垂范。</strong>深入地方考察调研，足迹遍及全国各地，他每次都是轻车简从。赴广东考察时吃自助餐，赴河南兰考调研指导时吃大盆菜烩面。在河北阜平住16平方米的房间，在四川芦山地震灾区住临时板房……点滴之间，彰显出共产党人的政治本色和为民情怀。</p><p><strong>健全知识体系，习近平勤学不辍。</strong>习近平曾说自己最大的爱好就是读书。青年时到陕北插队，他只带了两个行李箱，里面装的全是书。“白天劳动、晚上看书”成为他知青岁月的生活常态。</p><p>此外，习近平还极为重视调查研究，他有一句名言：当县委书记一定要跑遍所有的村，当地（市）委书记一定要跑遍所有的乡镇，当省委书记一定要跑遍所有的县市区。党的十八大以来，习近平到基层考察调研数十次，足迹遍及祖国大地。从调研中发现问题、认识国情、寻求规律，在调研中孕育新思想、谋划新战略、形成新举措，为各级领导干部树立了典范。</p><p>政声人去后，民意闲谈中。领导干部要真正做到修党性、立政德、明纪律、勤学习，不计个人功名，多积尺寸之功，追求人民群众的好口碑，必将得到历史沉淀之后的真正评价。</p><p>这也正是习近平给领导干部所上“公开课”的深意所在。</p><p>（中央广播电视总台央视网）</p></div><p><br></p>', '2019年1月21日，省部级主要领导干部坚持底线思维着力防范化解重大风险专题研讨班在中央党校开班。习近平在开班式上发表重要讲话。（来源：新华社）', 0, 0, 0, 1, 'storage/article/bt30DBNXEAmFSxTMj9Wf6g2WwSFALpc4ZlRAqtG5.jpeg', '2019-01-30 17:19:14', '2019-01-31 10:04:30', 0);
INSERT INTO `articles` VALUES (2, '缅甸央行宣布人民币为官方结算货币', '<p>新华社仰光1月30日电（记者庄北宁 车宏亮）缅甸中央银行30日发布通告，宣布增加人民币和日元为官方结算货币。</p><p>缅甸央行在通告中说，为促进国际支付与结算和边境贸易发展，准许使用人民币和日元作为结算货币进行国际支付。除获得许可的银行外，暂不允许其他机构和个人开设人民币和日元账户。</p><p>缅甸央行一名负责人接受新华社记者采访时说，人民币纳入结算货币后，缅中边贸支付和结算将更加便利。</p><p>中缅长期以来互为重要的贸易合作伙伴。缅甸先前批准的官方结算货币包括欧元、美元和新加坡元。</p><p>责任编辑： 郝多</p>', '新华社仰光1月30日电（记者庄北宁 车宏亮）缅甸中央银行30日发布通告，宣布增加人民币和日元为官方结算货币。', 0, 0, 0, 1, NULL, '2019-01-31 10:06:42', '2019-01-31 10:06:42', 0);
INSERT INTO `articles` VALUES (3, '专家析美国对委内瑞拉下手真实目的 激烈PK有啥牌？', '<p>中新网1月31日电(卞磊 陈爽) 截至当地时间1月31日，委内瑞拉政局已经乱了10天。</p><p>10天前，委内瑞拉反对派领袖瓜伊多自封“临时总统”，点燃政局；美国试图通过“外交孤立”和“内部颠覆”支持瓜伊多，对马杜罗步步紧逼；马杜罗则在多国及国内强力部门的合力支持下，坚决维护政权稳定。</p><p>美国搅局委内瑞拉，这场戏距离落幕，还有多远？</p><div><img width=\\\"500px\\\" src=\\\"http://t12.baidu.com/it/u=946470995,1117375716&amp;fm=173&amp;app=49&amp;f=JPEG?w=500&amp;h=333&amp;s=8A664196C08B9F5B454B67AD0300300A\\\"></div><p>1月23日，委内瑞拉总统马杜罗宣布与美国断交，图为马杜罗在首都加拉加斯参加集会并发表讲话。</p><p>【石油“背锅”？美委博弈没那么简单】</p><p>28日，美国宣布对委内瑞拉石油公司实施制裁。美国安全顾问博尔顿在一次采访中直言称：美干预委内瑞拉，“主要是因为委内瑞拉巨大的石油储量。”事实真的如此么？</p><p>“石油是逼迫马杜罗政府的一种手段”，“目的就是推翻委现政府，扶植亲美的、符合他们所谓‘民主’价值观的政府”，在接受中新网记者采访时，社科院拉美所副所长袁东振指出。</p><p>当然，美国的目的不止于此。19世纪后期，美国已开始掌控拉美，将其定位为美国“后院”。一战之后，拉美国家特别是民选政府反美情绪高涨。在很长一段时间里，美国都通过“胡萝卜加大棒”的政策，控制拉美。冷战以后，拉美地区出现一批左翼国家，委内瑞拉位列其中。</p><p>委前总统查韦斯以及他的继任者马杜罗，是近20年来拉美左翼势力的代表人物，同时也被认为是南美洲对抗美国、争取民族独立的最积极左翼力量。前驻委内瑞拉大使王珍分析称，在拉美的左翼中，查韦斯、马杜罗起了举旗引导的作用，因此特朗普认为，马杜罗政权非“消灭”不可，且“不达目的，不会罢休”。</p><p>然而，美国对委石油公司的制裁，或造成两败俱伤。一方面，石油对委内瑞拉来说，是重要的外汇来源、经济发展的重要资金来源，美国此举，将给马杜罗政府以重创。</p><p>另一方面，美国加州有不少炼油厂的设备，都只能用于炼化产自委内瑞拉的原油。若原油供应中断，炼油厂就要停工，或将引发美国的就业问题。</p><div><img width=\\\"500px\\\" src=\\\"http://t12.baidu.com/it/u=616665743,1514354522&amp;fm=173&amp;app=49&amp;f=JPEG?w=500&amp;h=351&amp;s=3604E9A7E78F08EC36C16C220300C040\\\"></div><p>1月24日，委内瑞拉国防部长洛佩斯发声明称，委军方将继续坚持此前的立场，承认马杜罗为合法总统。</p><p>【武力介入？美国“后院”这把火还烧不起来】</p><p>引起外界担忧的，不仅是美国对委内瑞拉石油业的限制。</p><p>1月29日，美安全顾问博尔顿在白宫新闻发布会上，因手持笔记本，泄露了美国“向哥伦比亚派兵5000人”的“天机”。</p><p>那么，美国是否将对委内瑞拉采取军事行动？“可能性不太大”，中国现代国际关系研究院拉美所所长助理孙岩峰指出，从特朗普的外交特色来看，他更倾向低成本的外交，不愿真正的投入，外交或比战争更符合这一特色。从现在形势来看，美国或更擅长用军事讹诈威胁，而非真正的投入军事。</p><p>同时，秘鲁外交部长波波利西奥29日称，拉美国家反对美国军事介入委内瑞拉局势。上世纪五、六十年代到八十年代末，美国武装干预拉美国家内政的事情层出不穷，包括巴西、阿根廷等国的政变。这一现象直接造成拉美局势的长期动荡，经济得不到应有的发展，亦使拉美陷入“守着金碗讨饭吃”的局面。</p><p>除此之外，委内瑞拉的军事动员能力也不容小觑。孙岩峰指出，从查韦斯起，该国就开始武装老百姓，购买大量步枪，还拥有庞大的民兵组织。若开战，委底层民众或“人人皆兵、人人都有武器”。眼下，美正从叙利亚、伊拉克等战争“泥沼”中撤退，不可能把腿再陷入另一个“泥沼”中。</p><p>但王珍指出，美国的军事干预是一种可能，不能低估。国际社会应千方百计地去阻止它，让美国不能采取军事干预。</p><div><img width=\\\"500px\\\" src=\\\"http://t10.baidu.com/it/u=220331490,1634823526&amp;fm=173&amp;app=49&amp;f=JPEG?w=500&amp;h=332&amp;s=8EB0D8A20802BAD41C24D6B103009007\\\"></div><p>2018年5月20日，委内瑞拉选举委员会称，该国现任总统马杜罗在大选中胜选。</p><p>【势均力敌？美政府和马杜罗政府各有杀手锏】</p><p>在火药味渐浓的委政局中，特朗普打出了令人眼花缭乱的“组合拳”，马杜罗政府也“兵来将挡”，积应对。那么，美委博弈，各有什么筹码？</p><p>美国支持的委反对派阵营</p><p>在这一阵营，首先有资产牌可打。据孙岩峰介绍，这张牌包含三个相关资产，分别为：美国是委出口石油最多的国家、委国家石油公司在美拥有大量海外资产、委的大部分石油贸易使用美元结算。孙岩峰说：“这三个动哪个，对委内瑞拉政府来讲，都意味着失去资金保障”。</p><p>第二，军事牌。美国曾在拉美入侵过巴拿马、格林纳达，对拉美国家来说，有着压倒性的军事实力。因此，委内瑞拉必须防备美国的军事威胁。但孙岩峰称，“军事牌或是他隐藏的一张牌，未必会用。”</p><p>第三，外交牌。在委内瑞拉的邻居中，有许多拉美右翼国家，在此次“站队”中，也都加入了美国阵营。在美国统帅下，这些拉美国家或带给马杜罗更大的外交压力。此外，借助委反对派，给马杜罗“找麻烦”，也是美国的筹码之一。</p><p>马杜罗政府</p><p>马杜罗政府方面，则可以打强力部门牌。目前，委最高法院、检察院、军队等机关，都在执政党手中。1月27日，马杜罗还视察了一处军营，宣布将举行委独立“200年来最重要的”军事演习。</p><p>第二，社会动员牌。目前，委内瑞拉留下的基本上都是马杜罗的“铁杆”支持群体。因此，在街头的大规模社会动员中，政府或更有优势。</p><p>第三，别国支持牌。鉴于美俄最近在叙利亚问题上的博弈，孙岩峰指出，俄扮演的角色初获胜果。因此，俄罗斯有信心、有经验、或也有一定能力，帮助马杜罗。此外，俄罗斯在委有深厚的利益所在，包括地缘战略、能源、军事等，皆将成为其力挺马杜罗的动力。</p><p>中方坚定奉行不干涉别国内政的原则，主张委内瑞拉的事务必须也只能由委内瑞拉人民自己选择和决定，反对单边制裁。29日，外交部发言人耿爽在例行记者会上指出，历史经验证明，外来干涉或制裁只会使局势更加复杂，无助于解决实际问题。有关国家对委制裁将导致委民生恶化，应对由此产生的严重后果负责。</p><div><img width=\\\"500px\\\" src=\\\"http://t11.baidu.com/it/u=3937357954,2971414563&amp;fm=173&amp;app=49&amp;f=JPEG?w=500&amp;h=332&amp;s=A66869A303A28AF600E1C412030090C3\\\"></div><p>受国际原油价格低迷、国内政局不稳、美国制裁等因素影响，委内瑞拉经济状况严峻，大量民众生活困难。图为加拉加斯街头排长队等待进入超市抢购的民众。</p><p>　【美委“拉锯战”，这场戏离落幕还远】</p><p>眼下，马杜罗政府已经坐上了“火药桶”，尽管各方进行多轮施压与博弈，但近期或还是无法等到“大结局”。</p><p>在分析马杜罗是否会进行重新大选时，孙岩峰预测，目前阶段，他不会做出这个决定。重新大选意味着，马杜罗认同2018年5月份的大选是有舞弊或有瑕疵的，是不合法的。而这正是他现下总统职位合法性的根源，因此，他不会轻易妥协。</p><p>当然，随着形势发展，马杜罗为了相互妥协，也不排除采取这类措施，以拖待变。总之，一切将取决于未来的形势。(完)</p>', '中新网1月31日电(卞磊 陈爽) 截至当地时间1月31日，委内瑞拉政局已经乱了10天。', 0, 0, 0, 1, 'storage/article/2O5k6zbuHgWxxsXiXFjl1ppLz34Z1HaYwWZ80jaJ.jpeg', '2019-01-31 10:08:06', '2019-01-31 10:08:06', 0);

-- ----------------------------
-- Table structure for cates
-- ----------------------------
DROP TABLE IF EXISTS `cates`;
CREATE TABLE `cates`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pid` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '分类状态:1.可用;2.不可用',
  `icon` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cates
-- ----------------------------
INSERT INTO `cates` VALUES (1, '喵星人', 0, 1, 'cate/ZtytrszeHqnlYHnlFYZs4Pth1AWasQtTgnxTQ57W.png', '2019-01-29 09:32:48', '2019-01-29 09:32:48');
INSERT INTO `cates` VALUES (2, '汪星人', 0, 1, 'cate/q974nzaG58ESYNOgPgcipDM4yY9PZIKk79nfOjrC.png', '2019-01-29 09:51:21', '2019-01-30 06:20:39');
INSERT INTO `cates` VALUES (3, '拉布拉多', 2, 1, 'cate/yPIFrAgQ73sj9eoC8l8vQxIIajWEmzjbPojIiV9z.jpeg', '2019-01-29 09:56:38', '2019-01-30 06:20:13');
INSERT INTO `cates` VALUES (4, '英短蓝猫', 1, 1, 'cate/7q23OkWNVL4epKhvP7IluM5jgKyX3WctyZqYCJQ2.jpeg', '2019-01-30 03:30:12', '2019-01-30 03:30:12');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_01_29_031140_create_cates_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_01_30_145539_create_articles_table', 2);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
