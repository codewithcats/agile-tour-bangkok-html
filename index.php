<html>
  <head>
    <meta charset="UTF-8">
    <title>Agile Tour Bangkok 2012 (Thailand)</title>
    <style type="text/css">
        h2{
            padding-top:25px;
        }
        #agile_thailand_banner{
            float:left; margin-top:15px;
        }
        #toc{
            float:right;
        }
        #toc ul{
            text-align: right;
        }
        #toc li{
            width: 140px; background-image:none; list-style: none;
        }
        #toc li a{
            color: gray;
        }
        #toc li a:hover{
            color:#F50;
        }
        .social-buttons{
            margin-top:7px; text-align:right; margin-bottom: 5px;
        }
        .twitter .btn .label{
            color: gray;
        }
        .social-buttons .twitter {
            float:right ; margin-right:10px;
        }
        .fb-like{
            float:right;
        }
        dt{
            font-weight: bold; font-size: 1.3em; color: gray; line-height: 2.4em;
        }
        dd{
            margin-bottom: 15px; color: gray; line-height: 2.4em;
        }
        .social-buttons .twitter {
          width: 150px;
        }
        .lang-bar {
          padding: 6px;
          background-color: #EEE;
          width: 52px;
        }
        .container p {
          font-size: 1.2em;
        }
        .theme {
          font-size: 1.3em;
          font-weight: bold;
          padding: 12px;
          background-color: #EEE;
        }
        .session-container,
        .speaker-container,
        .sponsors-container {
          margin: 0;
          width: 934px;
        }
        .session-container .session,
        .speaker-container .speaker {
          list-style: none;
          padding: 6px;
          float: left;
          width: 271px;
          border: 1px solid #CCC;
          border: 1px solid rgba(0, 0, 0, 0.2);
          margin: 3px;
          background-color: #FFF;
          -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
          -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
          box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }
        .session-container .session {
          padding: 12px;
          display: none;
        }
        .session-container .session.full {
          width: 903px;
        }
        .session-container .session.half {
          width: 435px;
        }
        .speaker-container .speaker:hover {
          cursor: pointer;
          background-color: #6CF;
        }
        .speaker-container .speaker img,
        .speaker-container .speaker-full-info-wrapper .speaker-full-info img {
          border: 1px solid #CCC;
          width: 89px;
          float: left;
        }
        .session-container .session img {
          border: none;
          float: none;
          margin-bottom: 12px;
        }
        .session-container .session .session-info {

        }
        .speaker-container .speaker .speaker-info {
          margin-left: 12px;
          float: left;
          width: 168px;
        }
        .session-container .session .session-info h3,
        .session-container .session .session-info h4,
        .speaker-container .speaker .speaker-info h3 {
          margin: 0;
        }
        .session-container .session .session-info h4 small {
          font-weight: normal;
        }
        .session-container .session .session-info .speaker-bio {
          display: none;
        }
        .session-container .session .session-info .session-tags {
          font-size: 0.8em;
          margin-top: 3px;
        }
        .session-container .session .session-info .session-tags .session-lang {
          margin-left: 12px;
        }
        .session-container .session .session-info .session-tags .session-tagline {
          color: #F50;
          margin-left: 12px;
        }
        .session-container .session .session-info .session-time {
          background-color: #98C0D5;
          padding: 2px 5px;
          border-radius: 5px;
        }
        .speaker-container .speaker .speaker-info p {
          margin: 0;
        }
        .speaker-container .speaker .speaker-info p strong {
          display: block;
        }
        .speaker-full-info-wrapper {
          position: absolute;
          margin: 10% auto;
          float: none;
          border: 10px solid #FFD6C2;
          border-radius: 3px;
          -moz-border-radius: 3px;
          -khtml-border-radius: 3px;
          -webkit-border-radius: 3px;
          z-index: 2000;
          text-align: left;
          left: 10%;
          right: 10%;
          background-color: #FFFEFF;
        }
        .speaker-full-info-wrapper .inside {
          padding: 10px;
          overflow: visible;
          z-index: 2000;
          height: 300px;
          border: 1px solid #CCC;
        }
        .speaker-container .speaker-full-info-wrapper .speaker-full-info {
          float: left;
        }
        .reg-options {
          margin-bottom: 24px;
        }
        .reg-options .reg-option {
          border-left: 6px solid #CCC;
          padding-left: 12px;
          margin-bottom: 6px;
        }
        .reg-options .reg-option.active {
          border-left: 6px solid #F50;
          font-size: 1.5em;
        }
        .payment-desc {
          padding: 12px;
          background-color: #EEE;
          font-size: 1.2em;
        }
        .payment-desc p {
          padding: 0;
          margin: 0;
        }
        .sponsors {
          margin-bottom: 12px;
        }
        .sponsors .sponsor {
          float: left;
          margin: 6px 12px;
        }
        .bronze-sponsors .sponsor {
          font-size: 1.7em;
        }
        .attendees .attendee, .attendees .attendees-info {
          padding: 6px 12px;
        }
        .attendees .attendee {
          margin: 12px 0;
        }
        .attendees .attendees-info {
          background-color: #EEE;
          margin-bottom: 12px;
        }
        .attendees .payment-status {
          float: left;
        }
        .attendees .payment-status {
          font-weight: bold;
          width: 180px;
          border-left: 6px solid;
          padding-left: 6px;
        }
        .attendees .payment-status.approved {
          border-left-color: #6FD36F;
          color: #6FD36F;
        }
        .attendees .payment-status.pending {
          border-left-color: #666;
          color: #666;
        }
        .attendees .attendee {
          border-left: 6px solid;
        }
        .attendees .attendee.approved {
          border-left-color: #6FD36F;
        }
        .attendees .attendee.pending {
          border-left-color: #666;
        }
        .attendees .attendee .name {
          font-weight: bold;
        }
        .attendees .attendee .answers {
          margin: 0;
          color: #666;
        }
        .attendees .attendee .answers .answer {
          color: #000;
        }
        .clear {
          clear: both;
        }
      </style>
  </head>
  <body>
    <div class="root">
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=382279461854961";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <div>
      <img id="agile_thailand_banner" src="https://lh4.googleusercontent.com/-gWYDQpW4_bI/UKHq6T013kI/AAAAAAAAACg/rBce1PVE1x0/s640/agileTourBangkokHeader.jpg" />
        <div id="toc" >
          <ul>
              <li><a href="#theme" >Theme</a></li>
              <li><a href="#sessions" >Sessions</a></li>
              <li><a href="#registration" >Registration</a> | <a href="#payment" >Payment</a></li>

              <li><a href="#sponsors" >Sponsors</a></li>
              <li><a href="#faq" >FAQ</a></li>
              <li><a href="#attendees" >Attendees</a></li>
          </ul>
        </div>
      </div>
      <div style="clear:both;"></div>
    <div class="social-buttons" >
      <div class="fb-like" data-href="https://www.facebook.com/agiletourbkk" data-send="false" data-layout="button_count" data-width="200" data-show-faces="false"></div>

      <div class="twitter">
        <a href="https://twitter.com/agiletourbkk" class="twitter-follow-button" data-show-count="false">Follow @agiletourbkk</a>
      </div>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


      <div style="clear:both;"></div>
    </div><!--class="social-buttons"-->
    <p>
      <img src="https://lh5.googleusercontent.com/-s3Mf6qlV-Cg/UKHq6pAV4UI/AAAAAAAAACk/a8t0Q2XWgJo/s640/agileTourBangkokBanner.jpg" /></p>
    <div class="container">
      <div class="lang-bar">
        <a href="#" class="swith-link" data-lang="th"><img src="http://at2012.agiletour.org/files/Thailand.png" alt="TH"></a>&nbsp;<a href="#" class="swith-link" data-lang="en"><img src="http://at2012.agiletour.org/files/United-Kingdom.png" alt="EN"></a>
      </div>
      <p class="content th">
        อไจล์ทัวร์เป็นงานสัมมนาแบบไม่หวังผลกำไรของผู้ที่สนใจในการพัฒนาซอฟต์แวร์ด้วยแนวคิดอไจล์ โดยจะจัดพร้อมๆกันในหลายประเทศในช่วงเดือน ต.ค.-ธ.ค. ของทุกปี ในปี 2012 นี้การจัดงานอไจล์ทัวร์จะมีขึ้นใน 84 เมืองของ 29 ประเทศทั่วโลก รวมทั้งที่ กรุงเทพฯ
      </p>
      <p class="content th">
        การพัฒนาซอฟต์แวร์แบบตามลำดับขึ้นหรือที่เราคุ้นเคยกันว่า waterfall นั้น เป็นที่ประจักษ์แล้วในปัจจุบันว่ามีแต่จะนำพาให้โครงการล่าช้า ลูกค้าไม่ได้ของที่ต้องการ และคนทำงานก็มีแต่ความทุกข์ จุดประสงค์หลักของงานก็คือการแผยแพร่ความรู้เรื่องแนวคิดอไจล์ ซึ่งเป็นแนวทางการทำงานที่ทำให้เกิดซอฟต์แวร์ที่ มีคุณภาพ ตรงใจลูกค้า และ มีความสุขในการทำงาน ให้เป็นที่รู้จักมากขึ้นในวงการพัฒนาซอฟต์แวร์ของบ้านเรา
      </p>
      <p class="content en">
        Agile66, a community of Agile enthusiasts in Thailand is organizing Agile Tour Bangkok 2012 conference as part of global Agile Tour non-profit conference hosted in 84 cities of 29 countries around the world during October to December this year.
      </p>
      <p class="content en">
        The main objective is to promote Agile, the proven software development practices to turnaround software development project from notorious death march to successful deliverables and joyful project, to Thai community. &nbsp;Speakers at the conference are mainly from the local community plus additional Agile experts from oversea.
      </p>
      <h2  id="theme">Theme</h2>
      <p class="content th">
        ธีมของงานนำมาจากส่วนหนึ่งของ<a href="http://agilemanifesto.org/iso/th/" target="_blank">คำแถลงอุดมการณ์แห่งอไจล์</a>
      </p>
      <p class="content theme th">
        ค้นพบวิธีที่ดีกว่าในการพัฒนาซอฟท์แวร์
      </p>
      <p class="content th">
        หรืออีกนัยหนึ่งก็คือการเผยแพร่ความรู้เกี่ยวกับอไจล์ให้กว้างขวางขึ้นนั่นเอง
      </p>
      <p class="content en">
        The Theme of the conference is
      </p>
      <p class="content theme en">
        Uncovering A Better Way To Develop Software
      </p>
      <p class="content en">
        a phrase from the Agile Manifesto which, in other word, means the theme is about promoting agile to wider audience.
      </p>
    </div>
    <h2 id="sessions">Sessions&nbsp;<img id="session-loader" src="https://lh5.googleusercontent.com/-rZqpLLP9B6g/UL6U-BzWLiI/AAAAAAAAALw/xT7lHn9gRFs/s72/loader.gif" alt="Loading"></h2>
    <div class="session-container">
      <div class="session full" data-ref="1"></div>
      <div class="session full" data-ref="11"></div>
      <div class="session full" data-ref="12"></div>
      <div class="session full" data-ref="4"></div>
      <div class="session full" data-ref="6"></div>
      <div class="session full" data-ref="3"></div>
      <div class="session full" data-ref="10"></div>
      <div class="session full" data-ref="9"></div>
      <div class="session full" data-ref="15"></div>
      <div class="session full" data-ref="13"></div>
      <div class="session full" data-ref="14"></div>
      <div class="session full" data-ref="2"></div>
      <div class="session full" data-ref="5"></div>
      <div class="session full" data-ref="16"></div>
      <div class="session full" data-ref="17"></div>
      <div class="clear"></div>
    </div>
    <div class="sponsors-container">
      <h2 id="sponsors">Sponsors</h2>
      <div class="sponsors platinum-sponsors">
        <div class="sponsor" style="padding-top:140px;padding-left:60px;">
          <img style="width:400px;" src="https://lh5.googleusercontent.com/-LgEAQ_d14OE/ULLbdd9tZuI/AAAAAAAAAJw/PxZwxDXUffk/s642/Platinum-TW-100px.jpg" alt="ToughtWorks">
        </div>
        <div class="sponsor">
          <img src="https://lh4.googleusercontent.com/-guUj7IqpLYw/ULLbdbhcq5I/AAAAAAAAAJ0/eaxBo8cZQLY/s294/Platinum-ProteusFamily-220px.png" alt="Proteus Family">
        </div>
        <div class="clear"></div>
      </div>
      <div class="sponsors gold-sponsors" style="padding-left: 55px;">
        <div class="sponsor" style="margin-right:30px;">
          <img src="https://lh4.googleusercontent.com/-JxwDovi3DZQ/UK3I5bLZEeI/AAAAAAAAAH4/rEpMPlS9g-0/s123/Gold-LaunchPad-120px.jpg" alt="LaunchPad">
        </div>
        <div class="sponsor" style="padding-top: 26px;margin-right: 48px;">
          <img src="https://lh6.googleusercontent.com/-DZsEqOAUpgI/UK3IExZJUUI/AAAAAAAAAHw/2jiYfLy0yQY/s162/Gold-BridgeAsia-90px.jpg" alt="BridgeAsia"></div>
        <div class="sponsor">
          <img src="https://lh5.googleusercontent.com/-8FLnRPd0Pts/ULIxSm8YujI/AAAAAAAAAJc/xWd5CzCKSnc/s128/Gold-Odd-e-120px.jpg">
        </div>
        <div class="sponsor" style="margin-top: 3px;">
          <img src="https://lh6.googleusercontent.com/-wethGl1gobs/ULLvo8i0HEI/AAAAAAAAAKM/_HNrTmNgs1Y/s220/tr_vrt_tm_2cp_pos.jpg" alt="Thomson Reuters"></div>
        <div class="clear"></div>
      </div>
      <div class="sponsors gold-sponsors" style="padding-left: 55px;">
        <div class="sponsor" style="padding-top:43px;margin-left:24px;margin-right:78px;">
          <img src="https://lh4.googleusercontent.com/--VJtFkjWBdQ/UK3ICkNU5jI/AAAAAAAAAHc/dTWfp0Wt_lY/s199/Gold-ProntoMarketing.png" alt="Pronto Marketing">
        </div>
        <div class="sponsor" style="margin-right:78px;">
          <img src="https://lh5.googleusercontent.com/-a6IspAP7IHE/UK_q9uIHdkI/AAAAAAAAAIg/46NOQGGTZTY/s121/Gold-DST-121px.jpg.jpg">
        </div>
        <div class="sponsor" style="padding-top:48px;">
          <img src="https://lh6.googleusercontent.com/-nO8q2MWIWIk/UL1eBvQaETI/AAAAAAAAALQ/5j9BcNTle88/s200/iconcept.jpg">
        </div>
        <div class="clear"></div>
      </div>
      <div class="sponsors silver-sponsors" style="padding-left:180px;margin-top:24px;">
        <div class="sponsor" style="margin-right:114px;">
          <img src="https://lh6.googleusercontent.com/-0bOy0fLnzSg/ULwTas8r0UI/AAAAAAAAAK0/vLZnWGZPnjI/s100/Logo-ABAC.jpg" alt="ABAC">
        </div>
        <div class="sponsor" style="padding-top:24px;">
          <img src="https://lh5.googleusercontent.com/-kDg5uYTMg5Y/ULwUf635G9I/AAAAAAAAAK8/3N09fnrSF9Y/s220/mustbemom-logo.jpg">
        </div>
        <div class="clear"></div>
      </div>
      <div class="sponsors bronze-sponsors" style="margin-top: 36px;padding-left:128px;">
        <div class="sponsor" style="padding-top:18px;">
          <strong>@sinapam</strong>
        </div>
        <div class="sponsor">
          <img src="https://lh3.googleusercontent.com/-dfI5Q4-2eSc/UK2wonaX3OI/AAAAAAAAAHI/jKK1w6GtjzQ/s114/Bronze-EmetWork-60px.jpg" alt="EmetWorks">
        </div>
        <div class="sponsor">
          <img src="https://lh6.googleusercontent.com/-455u8QKnMls/UK3Teu0-zSI/AAAAAAAAAIM/tpftELljig4/s128/Bronze-Sprint3r-60px.jpg" alt="Sprint3r">
        </div>
        <div class="sponsor" style="margin-top: -6px;">
          <img src="https://lh3.googleusercontent.com/-3EzOZ-WO9b8/ULL768UZUiI/AAAAAAAAAKg/VCOsSIThDJY/s120/scrumcat_create.png" alt="ScrumCat">
        </div>
        <div class="clear"></div>
      </div>
    </div>
    <p class="content th">
      ดูแลงานโดยกลุ่ม <a href="http://www.agile66.com">Agile66 </a> สามารถติดต่อเพื่อขอข้อมูลเพิ่มเติมได้ที่ <a href="mailto:tour@agile66.com">tour@agile66.com</a></p>
    <p class="content en">
      Want to sponsor the conference? Read <a href="http://goo.gl/ql22f">here</a>.</p>
    <p class="content en">
      Organized by The <a href="http://www.agile66.com">Agile66 </a>Community. Contact <a href="mailto:tour@agile66.com">tour@agile66.com</a> for more information</p>
    <div class="faq" >
      <h2 id="faq">FAQ</h2>
      <div class="faq_content">

          <dt>Q1: งานเริ่ม กี่โมง ถึงกี่โมง มี ตาราง schedule มั้ย?</dt>
          <dd>A1: จะมีการแจ้งให้ทราบ ทางอีเมลล์อีกครั้งหนึ่งค่ะ</dd>

          <dt>Q2: session Eng อย่างเดียว?</dt>
          <dd>A2: มี session ที่เป็นภาษาไทยค่ะ</dd>

          <dt>Q3: Dress code?</dt>
          <dd>A3: Casual ค่ะ คือไม่ต้องเป็นทางการมากนักค่ะ</dd>

          <dt>Q4: ค่าตั๋วรวมค่าอาหารด้วยหรือไม่ ?</dt>
          <dd>A4: รวมอาหารให้เรียบร้อยแล้วค่ะ</dd>

          <dt>Q5: walk in ได้ไหม?</dt>
          <dd>A5: ไม่มีรับ Walk-in นะคะ เพราะว่าสถานที่จำกัด</dd>

          <dt>Q6: ตกลงจะมีทีมงานสรุปเป็นไทยให้ใช่ป่าวครับ?</dt>
          <dd>A6: ไม่มีค่ะ เชื่อว่าผู้เข้าร่วมงานหลายๆท่าน คงกลับไปเขียน Blog ที่จะเป็นประโยชน์ให้ได้อ่านกันค่ะ</dd>

          <dt>Q7: วิธีเดินทางไปงาน?</dt>
          <dd>A7: ดูจาก Facebook page ของ Launchpad นะคะ <a href=" http://www.facebook.com/launchpadhq/info" target="_blank"> http://www.facebook.com/launchpadhq/info</a></dd>

          <dt>Q8: มีที่จอดรถไหม?</dt>
          <dd>A8: แนะนำว่าไม่ควรนำรถมา เพราะที่จอดรถมีน้อยค่ะ ที่จอดรถในตึก 30 บาท / ชั่วโมง ไม่มี stamp ให้ค่ะ</dd>

      </div>
    </div>
    <script id="session-info-tmpl" type="text/template">
      <img src="<%= imageUrl %>">
      <div class="session-info">
        <h3><%= SessionTitle %></h3>
        <h4><small>by</small>&nbsp;<%= SpeakerFullName %>&nbsp;<small><%= SpeakerTitle %></small></h4>
        <p class="session-tags">
          <span class="session-time"><%= Time %></span> <span class="session-lang">Language: <%= SessionLanguage %></span> <span class="session-tagline"><%= Tags %></span>
        </p>
        <p class="speaker-bio"><%= SpeakerBio %></p>
        <p class="session-description"><%= SessionDescription %></p>
      </div>
    </script>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/masonry/2.1.05/jquery.masonry.min.js"></script>
    <script type="text/javascript" src="http://agilebkk.ap01.aws.af.cm/miso.ds.deps.min.0.4.0.js"></script>
    <script type="text/javascript">
      (function() {
        fetchSpeakersInfo();
        var lang = getURLParameter('lang');
        if(lang !== 'th') lang = 'en';
        var langCls = '.'+lang;
        switchLang(langCls);
        $('.swith-link').click(function(e) {
          e.preventDefault();
          var langCls = '.' + $(this).attr('data-lang');
          switchLang(langCls);
        });
        function switchLang(langCls) {
          var content = $('.root .content');
          content.not(langCls).hide(0);
          content.filter(langCls).show(0);
        }
        function getURLParameter(name) {
          return decodeURI((RegExp(name + '=' + '(.+?)(&|$)').exec(location.search)||[,null])[1]);
        }
        var sessionInfoTmpl = _.template($('#session-info-tmpl').html());
        function fetchSpeakersInfo() {
          var sessionDataset = new Miso.Dataset({
            importer: Miso.Dataset.Importers.GoogleSpreadsheet,
            parser: Miso.Dataset.Parsers.GoogleSpreadsheet,
            key: "0AscWlVyoI5IidFpkekNJV2xFZ0U3YXFYd0VJSFJyaVE",
            worksheet : '1'
          });
          sessionDataset.fetch({
            success: function() {
              var sessions = $('.session-container .session');
              this.each(function(row) {
                if(!row['ref']) return;
                var ref = row['ref'];
                var info = sessionInfoTmpl(row);
                sessions.filter('[data-ref='+ref+']')
                  .html(info)
                  .data('fullInfo', row);
              });
              sessions.show();
              $('#session-loader').hide(0);
            },
            error: function() {
              console.log('Cannot fetch session data.')
            }
          });
        }
      }).call(this);
    </script>
    <?php
      $url = "http://www.eventbrite.com/json/event_list_attendees?id=4816647723&user_key=135276911746277596537&app_key=GQVOZYT5FUTBM2AVPQ";
      $chandle = curl_init();
      curl_setopt($chandle, CURLOPT_URL, $url);
      curl_setopt($chandle, CURLOPT_RETURNTRANSFER, 1);
      $content = curl_exec($chandle);
      curl_close($chandle);
      $data = json_decode($content);
      $attendees = $data->attendees;
      $attendees_count = count($attendees);
    ?>
    <div class="attendees"  id="attendees">
      <h2 id="attendees">Attendees (<?php echo $attendees_count; ?>)</h2>
      <div class="attendees-info">
        <div id="payment-status-approved" class="payment-status approved">Confirmed Payment</div>
        <div id="payment-status-pending" class="payment-status pending">Waiting for Payment</div>
        <div class="clear"></div>
      </div>
    <?php
      $approved_count = 0;
      foreach ($attendees as $a) {
        $attendee = $a->attendee;
        //var_dump($attendee);
        $status = 'pending';
        $amountPaid = floatval($attendee->amount_paid);
        $isPaid = $amountPaid >= 1000.00;
        $isApproved = $amountPaid == 0.01;
        if($isApproved || $isPaid) {
          $status = 'approved';
          $approved_count++; 
        }
        $name = $attendee->first_name .' '.$attendee->last_name;
        $tag = '';
        if($attendee->job_title) $tag .= ', '.$attendee->job_title;
        if($attendee->job_title && $attendee->company)
          $tag .= ' at';
        if($attendee->company) $tag .= ' '.$attendee->company;
        $agileExp = $attendee->answers[0]->answer->answer_text;
        $expectation = FALSE;
        if($attendee->answers[2]->answer->question_id === 3026149)
          $expectation = $attendee->answers[2]->answer->answer_text;
    ?>
    <div class="attendee <?php echo $status; ?>">
      <span class="name"><?php echo $name; ?></span><?php echo $tag; ?>
      <p class="answers">
        <?php if($expectation): ?>
        Expectation: <span class="answer"><?php echo $expectation; ?></span>
        <?php endif; ?>
      </p>
    </div>
    <?php
      }
      $waiting_count = $attendees_count - $approved_count;
    ?>
  </div>
  <script type="text/javascript">
      $('#payment-status-approved').html('Confirmed Payment (<?php echo $approved_count; ?>)');
      $('#payment-status-pending').html('Waiting for Payment (<?php echo $waiting_count; ?>)');
  </script>
  </div>
  </body>
</html>