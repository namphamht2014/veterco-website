<?php $this->load->view('frontend/home-header'); ?>
<div class="chairmanContainer">
  <div class="loadingPage">
    <img src="/assets/images/waiting.gif" alt="" />
    <div class="text">
      Loading...
    </div>
  </div>
  <div class="content">
    <img src="/assets/images/chairman_envelope.png" alt="" onmouseover="myPopup.show()" class="envelope"/>
    <img src="/assets/images/chairman_hs.png" alt="" onmouseover="myPopup.show()" class="hs"/>
    <div class="myPopup">
      <a onclick="myPopup.hide()"><span>x</span></a>
      <div class="title">
        <b><i>Greeting! I wish everyone a prosperous year of <?= date('Y')?>,</i></b>
      </div><br>
      <b>This message is written for those who are significantly important in my life and my career.
      <br>To my valuable customers,<br>
      As I look at the growth over the years since our establishment in 1993, I am extremely proud of what we have achieved and even more excited about our outlook for an equally promising future. We have succesfully transitioned from a local Can Tho start-up to become a respected firm, garnering business from across the nation, while earning your trust along the way.
      It’s satisfying to know that we are able to provide you the best solution in farming and the most profitable use of vet medicine. Customer satisfaction is the hallmark by which we measure our performance, and we hold ourselves, as do our clients, to the highest standards of quality. Thank you for your amazing support over the years and I, on behalf of Veterco, kindly ask for that incredible support in the future.
      <br>To my talented employees,<br>
      Veterco is not going to be what we are today without your creativity, talent and perseverance. Focusing on quality is an essential part of who we are and how we conduct our business. Along the way, we worked together and we forged a new future for our company. Now we have a platform we can all be exceptionally proud of.
      As your Chairman, I am promising a future of ethical management. We have big opportunites in front of us this year and we’re kicking things off with renewed energy and direction. Finally, i would like to say that thank you so much for looking after Veterco for the last 20 years. I have watched him grow in confidence with your dedication and hardwork.
      <br>To our potential customers,<br>
      If you have heard about Veterco once or even come across our name somewhere on the street, please take a minute to get to know who we are. You will be amazed of what you’ve found and the people of Veterco you’ve talked to. I strongly admire and believe in a quote of Mr Richard Branson that “Train people well enough so they can leave, and treat them well enough so they don’t want to”. One thing i can guarantee you is that Veterco’s full of amazingly smart and passionate people who will not only give you what you want but also fulfill it with finest and details.
      <br>To my website users,<br>
      Welcome to our website! I hope you will find it easy to use and that all the information you are looking for is at your fingertips. If not, please let us know!</b>
    </div>
  </div>
  <?php $this->load->view('frontend/footer');?>
</div>
