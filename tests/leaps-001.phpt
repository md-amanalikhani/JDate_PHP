--TEST--
date suffixes test
--FILE--
<?php
require_once(dirname(__DIR__)."/SHDate.php");
date_default_timezone_set('UTC');
class test extends SHDate
{
	public function __construct(){
		for($y = 1200; $y <= 1600; $y++){
			$date = self::isLeaps($y,true);
			var_dump($date);
		}
	}
}
$tst = new test();

echo "Done\n";
?>
--EXPECT--
int(290)
int(290)
int(291)
int(291)
int(291)
int(291)
int(292)
int(292)
int(292)
int(292)
int(293)
int(293)
int(293)
int(293)
int(293)
int(294)
int(294)
int(294)
int(294)
int(295)
int(295)
int(295)
int(295)
int(296)
int(296)
int(296)
int(296)
int(297)
int(297)
int(297)
int(297)
int(298)
int(298)
int(298)
int(298)
int(299)
int(299)
int(299)
int(299)
int(300)
int(300)
int(300)
int(300)
int(301)
int(301)
int(301)
int(301)
int(301)
int(302)
int(302)
int(302)
int(302)
int(303)
int(303)
int(303)
int(303)
int(304)
int(304)
int(304)
int(304)
int(305)
int(305)
int(305)
int(305)
int(306)
int(306)
int(306)
int(306)
int(307)
int(307)
int(307)
int(307)
int(308)
int(308)
int(308)
int(308)
int(309)
int(309)
int(309)
int(309)
int(309)
int(310)
int(310)
int(310)
int(310)
int(311)
int(311)
int(311)
int(311)
int(312)
int(312)
int(312)
int(312)
int(313)
int(313)
int(313)
int(313)
int(314)
int(314)
int(314)
int(314)
int(315)
int(315)
int(315)
int(315)
int(316)
int(316)
int(316)
int(316)
int(316)
int(317)
int(317)
int(317)
int(317)
int(318)
int(318)
int(318)
int(318)
int(319)
int(319)
int(319)
int(319)
int(320)
int(320)
int(320)
int(320)
int(321)
int(321)
int(321)
int(321)
int(322)
int(322)
int(322)
int(322)
int(323)
int(323)
int(323)
int(323)
int(324)
int(324)
int(324)
int(324)
int(324)
int(325)
int(325)
int(325)
int(325)
int(326)
int(326)
int(326)
int(326)
int(327)
int(327)
int(327)
int(327)
int(328)
int(328)
int(328)
int(328)
int(329)
int(329)
int(329)
int(329)
int(330)
int(330)
int(330)
int(330)
int(331)
int(331)
int(331)
int(331)
int(332)
int(332)
int(332)
int(332)
int(332)
int(333)
int(333)
int(333)
int(333)
int(334)
int(334)
int(334)
int(334)
int(335)
int(335)
int(335)
int(335)
int(336)
int(336)
int(336)
int(336)
int(337)
int(337)
int(337)
int(337)
int(338)
int(338)
int(338)
int(338)
int(339)
int(339)
int(339)
int(339)
int(340)
int(340)
int(340)
int(340)
int(340)
int(341)
int(341)
int(341)
int(341)
int(342)
int(342)
int(342)
int(342)
int(343)
int(343)
int(343)
int(343)
int(344)
int(344)
int(344)
int(344)
int(345)
int(345)
int(345)
int(345)
int(346)
int(346)
int(346)
int(346)
int(347)
int(347)
int(347)
int(347)
int(348)
int(348)
int(348)
int(348)
int(348)
int(349)
int(349)
int(349)
int(349)
int(350)
int(350)
int(350)
int(350)
int(351)
int(351)
int(351)
int(351)
int(352)
int(352)
int(352)
int(352)
int(353)
int(353)
int(353)
int(353)
int(354)
int(354)
int(354)
int(354)
int(355)
int(355)
int(355)
int(355)
int(355)
int(356)
int(356)
int(356)
int(356)
int(357)
int(357)
int(357)
int(357)
int(358)
int(358)
int(358)
int(358)
int(359)
int(359)
int(359)
int(359)
int(360)
int(360)
int(360)
int(360)
int(361)
int(361)
int(361)
int(361)
int(362)
int(362)
int(362)
int(362)
int(363)
int(363)
int(363)
int(363)
int(363)
int(364)
int(364)
int(364)
int(364)
int(365)
int(365)
int(365)
int(365)
int(366)
int(366)
int(366)
int(366)
int(367)
int(367)
int(367)
int(367)
int(368)
int(368)
int(368)
int(368)
int(369)
int(369)
int(369)
int(369)
int(370)
int(370)
int(370)
int(370)
int(371)
int(371)
int(371)
int(371)
int(371)
int(372)
int(372)
int(372)
int(372)
int(373)
int(373)
int(373)
int(373)
int(374)
int(374)
int(374)
int(374)
int(375)
int(375)
int(375)
int(375)
int(376)
int(376)
int(376)
int(376)
int(377)
int(377)
int(377)
int(377)
int(378)
int(378)
int(378)
int(378)
int(379)
int(379)
int(379)
int(379)
int(379)
int(380)
int(380)
int(380)
int(380)
int(381)
int(381)
int(381)
int(381)
int(382)
int(382)
int(382)
int(382)
int(383)
int(383)
int(383)
int(383)
int(384)
int(384)
int(384)
int(384)
int(385)
int(385)
int(385)
int(385)
int(386)
int(386)
int(386)
int(386)
int(386)
int(387)
int(387)
Done
