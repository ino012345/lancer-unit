<?php get_header(); ?>

<main>
  <section class="contact">
    <h1 class="contact__title">クリエイター登録フォーム</h1>
    <p class="contact__english">Entry form</p>
    <div class="contact__phase">
      <ul class="contact__phaseList">
        <li class="contact__phaseItem current">入力画面</li>
        <li class="contact__phaseItem">内容確認</li>
        <li class="contact__phaseItem">送信完了</li>
      </ul>
    </div>
    <p class="contact__explain">LANCER UNIT案件にご興味のあるクリエイターに向けたアンケートです。<br>皆様の対応領域や稼働状況を詳しくお知らせいただくことにより、ご希望にあった案件を優先的にご紹介します。<br><br>＜回答の際のお願い＞<br>使用ツールや言語、得意ジャンルや実績例など、より具体的にご記入ください。<br>クライアントへお伝えできる内容が増し、案件のご紹介頻度が高まりますので、できるだけ多くの情報をご記入いただければと思います。</p>
    <div class="contact__time">ご回答時間の目安：5分程度</div>
    <div class="contact__main">
      <?php the_content(); ?>
      <!-- <ul class="contact__list"> -->
        <!-- <li class="contact__item">
          <p class="contact__label">名前</p>
          <div class="contact__separate">
            
          </div>
        </li>
        <li class="contact__item">
          <p class="contact__label">フリガナ</p>
          <div class="contact__separate">

          </div>
        </li>
        <li class="contact__item">
          <p class="contact__label">お住まいの都道府県</p>
          <div class="contact__separate">

          </div>
        </li>
        <li class="contact__item">
          <p class="contact__label">所属校舎</p>
          <div class="contact__separate">

          </div>
        </li>
        <li class="contact__item">
          <p class="contact__label">電話番号</p>
          <div class="contact__wide">

          </div>
        </li>
        <li class="contact__item">
          <p class="contact__label">Email</p>
          <div class="contact__wide">

          </div>
        </li> -->
        <!-- <li class="contact__item contact__item--color">
          <p class="contact__color orange">対応領域／Web系（複数選択可）</p>
          <div class="contact__select">

          </div>
          <p class="contact__attention">※ご自身だけでなくチーム/ネットワークでカバーできるものもチェックください。</p>
        </li>
        <li class="contact__item contact__item--color">
          <p class="contact__color green">対応領域／グラフィック系（複数選択可）</p>
          <div class="contact__select">

          </div>
          <p class="contact__attention">※ご自身だけでなくチーム/ネットワークでカバーできるものもチェックください。</p>
        </li>
        <li class="contact__item contact__item--color">
          <p class="contact__color pink">対応領域／3DCG・動画系（複数選択可）</p>
          <div class="contact__select">

          </div>
          <p class="contact__attention">※ご自身だけでなくチーム/ネットワークでカバーできるものもチェックください。</p>
        </li>
        <li class="contact__item contact__item--color">
          <p class="contact__color gray">対応領域／コンテンツ作成（複数選択可）</p>
          <div class="contact__select">

          </div>
          <p class="contact__attention">※ご自身だけでなくチーム/ネットワークでカバーできるものもチェックください。</p>
        </li>
        <li class="contact__item contact__item--color">
          <p class="contact__color beige">対応領域／エンジニア系（複数選択可）</p>
          <div class="contact__select">

          </div>
          <p class="contact__attention">※ご自身だけでなくチーム/ネットワークでカバーできるものもチェックください。</p>
        </li> -->
        <!-- <li class="contact__item contact__item--border">
          <p class="contact__label">受注案件</p>
          <p class="contact__detail">ご自身が主に受注されている案件や、これから受注していきたいと考えている案件を詳しく教えてください。</p>
          <div class="contact__textarea">

          </div>
          <p class="contact__attention">使用ツールや言語など、なるべく多くより具体的にご記入ください。情報が多いほど、マッチングの確度が高まります。</p>
        </li>
        <li class="contact__item contact__item--border">
          <p class="contact__label">作業の目安単価</p>
          <p class="contact__detail">成果物に対する金額感もあれば合わせて教えてください。</p>
          <div class="contact__textarea">

          </div>
          <p class="contact__attention">「どのくらいの単価感で対応可能ですか？」との問合せが多く、予め目安単価を提示しておく事でより選定確度を高める事に繋がります。</p>
        </li>
        <li class="contact__item contact__item--border">
          <p class="contact__label">稼働状況</p>
          <p class="contact__detail">稼働可能な時間帯や曜日、週または月での稼働時間、などお書きください。</p>
          <div class="contact__textarea">

          </div>
          <p class="contact__attention">例）<br>稼働日時：平日9時-18時<br>稼働時間：20~30時間/月<br><br>※リモート中心での働き方をご希望の方は、「※リモート希望」とご記載ください<br>※常駐・副業等でお勤めの時間帯がある場合でも、連絡のみなら可能、という方は「平日日中の連絡・オンラインMTG調整可能」など対応可能な範囲をお書きください。</p>
        </li>
        <li class="contact__item contact__item--border">
          <p class="contact__label">あなたの“オンリーワン”を教えてください</p>
          <p class="contact__detail">得意なジャンル、対応可能なジャンル、あなたの強みを教えてください。ポートフォリオに補足があれば合わせてこちらに記入ください。</p>
          <div class="contact__textarea">

          </div>
          <p class="contact__attention">●●の業界に詳しい、●●のソフトが使える、作業が早い、英語が話せる、こんなバックボーンがあるなど、企業のニーズも様々ですのでオンリーワンな情報が選定確度を高める事に繋がります。</p>
        </li> -->
        <!-- <li class="contact__item contact__item--border">
          <p class="contact__label">検討企業様へポートフォリオ開示</p>
          <div class="contact__radio">

          </div>
          <p class="contact__detail">募集の前に案件候補者としてポートフォリオを含めた情報を提供します、企業の人材要件とマッチしていれば、そのまま選考され選定確度を高める事に繋がります。<br>※JSSで都度応募いただく必要があります。</p>
          <p class="contact__label">ポートフォリオURL</p>
          <div class="contact__wide">

          </div>
          <p class="contact__attention">ご希望に近いを思われる案件があった際に、優先的にクライアントにポートフォリオをご紹介させていただきます。<br>※Web上で閲覧可能な状態にしてください。</p>
          <p class="contact__label">ポートフォリオパスワード</p>
          <div class="contact__wide">

          </div>
          <p class="contact__attention">パスワード制限をかけている方はこちらにご記入ください。</p>
        </li>
        <li class="contact__item contact__item--border">
          <p class="contact__label">Twitterアカウント</p>
          <div class="contact__wide">

          </div>
          <p class="contact__attention">Twitterアカウントをお持ちの方は、よろしければアカウント名をお書き下さい。<br>ランサーユニット公式アカウント（@lancerunit）よりフォローさせていただく場合がございます。</p>
        </li>
        <li class="contact__item contact__item--border">
          <p class="contact__label">クリエイター面談（オンライン）の可否</p>
          <div class="contact__radio">

          </div>
          <p class="contact__detail">よりご希望に合った案件を紹介させていただくために、これまでのご実績や稼働状況について詳しくお伺いするオンライン面談を依頼させていただく場合がございます。 <br>（ランサーユニット事務局スタッフにより15分～30分程度の予定） <br>面談の可否をお聞かせください。</p>
        </li>
        <li class="contact__item contact__item--border">
          <p class="contact__label">常駐（正社員・派遣）に対応可能ですか</p>
          <div class="contact__radio">

          </div>
        </li>
        <li class="contact__item contact__item--border">
          <p class="contact__label">クリエイター向けの保険・補償制度（フリーナンス、フリーランス協会等）への加入</p>
          <div class="contact__radio">

          </div>
        </li> -->
      <!-- </ul> -->
      <!-- <div class="contact__privacyWrap">
        <p class="contact__privacyText">
          <a href="#">個人情報の取扱い</a>
          に同意する
        </p>
      </div> -->
    </div>
  </section>
</main>

<?php get_footer(); ?>