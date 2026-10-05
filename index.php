<?php
// Jewel Frontier — homepage
$m = (int) date('n');
$birth = [1=>['Garnet','deep red'],2=>['Amethyst','violet'],3=>['Aquamarine','sea blue'],4=>['Diamond','colourless brilliance'],5=>['Emerald','rich green'],6=>['Pearl','soft lustre'],7=>['Ruby','vivid red'],8=>['Peridot','lime green'],9=>['Sapphire','royal blue'],10=>['Opal','play-of-colour'],11=>['Topaz','golden warmth'],12=>['Turquoise','sky blue']][$m];
$msg = ''; $ok = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nl_email'])) {
    $email = trim((string) filter_input(INPUT_POST, 'nl_email', FILTER_SANITIZE_EMAIL));
    if (!empty($_POST['website'])) { $ok = true; $msg = 'Thank you.'; }
    elseif ($email && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        @file_put_contents(__DIR__ . '/subscribers.txt', date('c') . "\t" . $email . PHP_EOL, FILE_APPEND | LOCK_EX);
        $ok = true; $msg = 'Thank you. Your first Frontier Letter will arrive at the start of next month.';
    } else { $msg = 'Please enter a valid email address.'; }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Jewel Frontier | Watches as Jewellery: Metals, Gems &amp; Watch Jewels</title>
<meta name="description" content="An independent guide to the watch as jewellery: watch jewels, gold, steel and ceramic cases, sapphire crystals, gem-set dials, wrist sizing, pairing and care.">
<meta name="robots" content="index, follow, max-image-preview:large">
<link rel="canonical" href="https://www.jewelfrontier.com/">
<meta property="og:type" content="website"><meta property="og:site_name" content="Jewel Frontier">
<meta property="og:title" content="Jewel Frontier | Watches as Jewellery: Metals, Gems &amp; Watch Jewels"><meta property="og:description" content="An independent guide to the watch as jewellery: watch jewels, gold, steel and ceramic cases, sapphire crystals, gem-set dials, wrist sizing, pairing and care.">
<meta property="og:url" content="https://www.jewelfrontier.com/"><meta property="og:image" content="https://images.unsplash.com/photo-1636289039346-ac54cc941975?auto=format&fit=crop&w=1200&q=75">
<meta name="twitter:card" content="summary_large_image"><meta name="theme-color" content="#0D0F1A">
<link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 40 40'%3E%3Crect width='40' height='40' fill='%230D0F1A'/%3E%3Cpath d='M20 4 L35 15 L20 36 L5 15 Z' fill='none' stroke='%23C9A96E' stroke-width='2.4'/%3E%3Ccircle cx='20' cy='17' r='4' fill='%239B1B30'/%3E%3C/svg%3E">
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link rel="preconnect" href="https://images.unsplash.com">
<link href="https://fonts.googleapis.com/css2?family=Bellefair&family=Raleway:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-0LY0HY7L01');
</script>
<script type="application/ld+json">[{"@context": "https://schema.org", "@type": "Organization", "name": "Jewel Frontier", "url": "https://www.jewelfrontier.com/", "email": "hello@jewelfrontier.com", "telephone": "+1-888-777-5845", "address": {"@type": "PostalAddress", "streetAddress": "181 Mercer Street", "addressLocality": "New York", "addressRegion": "NY", "postalCode": "10012", "addressCountry": "US"}}, {"@context": "https://schema.org", "@type": "FAQPage", "mainEntity": [{"@type": "Question", "name": "What are “jewels” in a watch?", "acceptedAnswer": {"@type": "Answer", "text": "In mechanical watches, jewels are tiny synthetic rubies or sapphires used as bearings for the moving parts. Their extremely hard, smooth surfaces reduce friction and wear at pivot points. They are functional rather than decorative, and synthetic corundum has been used since the early twentieth century."}}, {"@type": "Question", "name": "Does a higher jewel count mean a better watch?", "acceptedAnswer": {"@type": "Answer", "text": "Not necessarily. A well-designed hand-wound movement is typically fully jewelled with around 17 jewels; automatics and complicated movements need more because they have more moving parts. Jewels that do no functional job add no value."}}, {"@type": "Question", "name": "What is a sapphire crystal?", "acceptedAnswer": {"@type": "Answer", "text": "It is a watch glass made from synthetic sapphire, a form of corundum that is extremely hard and very resistant to scratching. Only harder materials, such as diamond, can easily scratch it."}}, {"@type": "Question", "name": "Can I wear a gem-set watch every day?", "acceptedAnswer": {"@type": "Answer", "text": "Many can be worn daily with care, but gem settings can loosen with knocks. Have settings checked during routine servicing, and remove the watch for sport, heavy work or swimming unless it is designed for that."}}, {"@type": "Question", "name": "How do I match a watch with my jewellery?", "acceptedAnswer": {"@type": "Answer", "text": "A simple guideline is to keep metals in the same family, or choose a two-tone watch to bridge different metals. Balance a bold watch with quieter jewellery, and vice versa."}}, {"@type": "Question", "name": "Does Jewel Frontier sell watches?", "acceptedAnswer": {"@type": "Answer", "text": "No. We are an independent educational guide. We do not sell watches or jewellery and we are not affiliated with any brand."}}]}]</script>
</head>
<body>
<a class="skip" href="#main">Skip to content</a>
<header class="hdr">
  <div class="wrap">
    <nav aria-label="Main navigation left"><ul class="nav"><li><a href="index.php" aria-current="page">Home</a></li><li><a href="materials-guide.html">Materials</a></li><li><a href="styling-care.html">Styling &amp; Care</a></li></ul></nav>
    <a class="logo" href="index.php" aria-label="Jewel Frontier home"><svg viewBox="0 0 40 40" aria-hidden="true"><path d="M20 2 L36 14 L20 38 L4 14 Z" fill="none" stroke="#C9A96E" stroke-width="1.6"/><path d="M4 14 H36 M12 14 L20 38 L28 14 M12 14 L20 2 L28 14" fill="none" stroke="#C9A96E" stroke-width="1"/><circle cx="20" cy="18" r="3" fill="#9B1B30"/></svg><span>Jewel Frontier</span></a>
    <nav aria-label="Main navigation right"><ul class="nav r"><li><a href="about.html">About</a></li><li><a href="contact.html">Contact</a></li></ul></nav>
    <button class="burger" aria-label="Open menu" aria-expanded="false" aria-controls="mnav"><span></span><span></span><span></span></button>
  </div>
  <nav class="mnav" id="mnav" aria-label="Mobile navigation"><a href="index.php">Home</a><a href="materials-guide.html">Materials</a><a href="styling-care.html">Styling &amp; Care</a><a href="about.html">About</a><a href="contact.html">Contact</a></nav>
</header>
<main id="main">
<section class="hero deco">
  <div class="wrap">
    <div class="hero-grid">
      <div>
        <span class="tag">The watch as jewellery</span>
        <h1>Where fine watchmaking meets <em>the jeweller&#8217;s art</em>.</h1>
        <p>Jewel Frontier is an independent guide to the most precious side of watches: gold and platinum cases, sapphire crystals, gem-set bezels and the tiny rubies hidden inside every mechanical movement.</p>
        <div class="ctas"><a class="btn" href="#jewels">Discover watch jewels</a><a class="btn btn--ruby" href="materials-guide.html">Materials guide</a></div>
      </div>
      <div class="gem-frame">
        <div class="main"><img src="https://images.unsplash.com/photo-1636289039346-ac54cc941975?auto=format&fit=crop&w=800&q=75" alt="gold watch with diamonds set on the dial" width="800" height="1000" fetchpriority="high"></div>
        <div class="mini"><img src="https://images.unsplash.com/photo-1736615494533-14b406d50f26?auto=format&fit=crop&w=400&q=75" alt="woman's hands wearing rings and a wristwatch" width="400" height="400"></div>
      </div>
    </div>
    <div class="hero-stats">
      <div><b>75%</b><span>pure gold in an 18 karat case</span></div>
      <div><b>9</b><span>Mohs hardness of sapphire crystal</span></div>
      <div><b>17</b><span>jewels in a classic hand-wound movement</span></div>
    </div>
  </div>
</section>

<section class="jewels" id="jewels" aria-labelledby="jw-t">
  <div class="wrap j-grid">
    <div class="j-pics">
      <div class="pic"><img src="https://images.unsplash.com/photo-1764429601437-85ad5745f0b7?auto=format&fit=crop&w=700&q=75" alt="close-up of intricate watch movement gears" width="700" height="933" loading="lazy"></div>
      <div class="pic"><img src="https://images.unsplash.com/photo-1551122102-63cd339bfaab?auto=format&fit=crop&w=500&q=75" alt="close-up of a red gemstone" width="500" height="500" loading="lazy"></div>
    </div>
    <div>
      <span class="tag" style="color:var(--ruby)">Hidden treasure</span>
      <h2 id="jw-t">The rubies inside your watch</h2>
      <p>Open the case back of a mechanical watch and you may spot tiny red dots among the gears. These are jewels: synthetic rubies or sapphires drilled and polished to act as bearings. Their hardness and smoothness reduce friction where steel pivots turn, helping the movement run accurately for decades.</p>
      <p class="muted">Move the slider to see what different jewel counts usually mean.</p>
      <div class="counter">
        <label for="jw">Jewel count</label>
        <input type="range" id="jw" min="1" max="40" value="17">
        <div class="ruby-row" id="jw-row" aria-hidden="true"></div>
        <p id="jw-text" aria-live="polite"><b>17 jewels</b> &mdash; A fully jewelled hand-wound movement.</p>
      </div>
    </div>
  </div>
</section>

<section class="metals" aria-labelledby="mt-t">
  <div class="wrap">
    <div class="head"><div><span class="tag" style="color:var(--ruby)">Case materials</span><h2 id="mt-t">Precious metals and modern materials</h2></div><p>The case is the watch&#8217;s setting, just as a ring is a gemstone&#8217;s. Each material changes the weight, colour and character of the piece.</p></div>
    <div class="mtabs" role="tablist" aria-label="Case materials"><button type="button" role="tab" id="t-gold" aria-controls="p-gold" aria-selected="true">Gold</button><button type="button" role="tab" id="t-steel" aria-controls="p-steel" aria-selected="false">Stainless steel</button><button type="button" role="tab" id="t-two" aria-controls="p-two" aria-selected="false">Two-tone</button><button type="button" role="tab" id="t-cer" aria-controls="p-cer" aria-selected="false">Ceramic</button></div>
    <div class="mpanel" role="tabpanel" id="p-gold" aria-labelledby="t-gold"><div class="pic"><img src="https://images.unsplash.com/photo-1567438022171-636f2f86b971?auto=format&fit=crop&w=800&q=75" alt="round gold-coloured watch" width="800" height="680" loading="lazy"></div><div><h3>Gold</h3><p>Warm, rich and timeless. Watch cases are usually 18 karat gold, which is 75% pure gold alloyed with other metals for strength. Yellow, rose and white gold differ only in the metals added to the alloy.</p><dl><dt>Character</dt><dd>Dense, warm, softly lustrous</dd><dt>Durability</dt><dd>Can scratch; polishable by a specialist</dd><dt>Best for</dt><dd>Dress watches, heirloom pieces</dd></dl></div></div><div class="mpanel" role="tabpanel" id="p-steel" aria-labelledby="t-steel" hidden><div class="pic"><img src="https://images.unsplash.com/photo-1786052351748-994f5c8ee4b7?auto=format&fit=crop&w=800&q=75" alt="polished silver wristwatch reflecting on a surface" width="800" height="680" loading="lazy"></div><div><h3>Stainless steel</h3><p>The everyday hero. Grades such as 316L resist corrosion, polish to a bright shine and take a brushed finish well. Durable, affordable to service and easy to wear daily.</p><dl><dt>Character</dt><dd>Bright, cool, versatile</dd><dt>Durability</dt><dd>Scratches lightly; resists rust</dd><dt>Best for</dt><dd>Daily wear, sports and dress watches</dd></dl></div></div><div class="mpanel" role="tabpanel" id="p-two" aria-labelledby="t-two" hidden><div class="pic"><img src="https://images.unsplash.com/photo-1618215650148-e8e61eae521c?auto=format&fit=crop&w=800&q=75" alt="person wearing a gold and silver watch" width="800" height="680" loading="lazy"></div><div><h3>Two-tone</h3><p>Steel combined with gold, often on the bezel, crown and centre bracelet links. Two-tone pieces bridge silver and gold jewellery, making them easy to style with both.</p><dl><dt>Character</dt><dd>Warm and cool together</dd><dt>Durability</dt><dd>Gold parts wear faster than steel</dd><dt>Best for</dt><dd>Mixing metals, versatile dressing</dd></dl></div></div><div class="mpanel" role="tabpanel" id="p-cer" aria-labelledby="t-cer" hidden><div class="pic"><img src="https://images.unsplash.com/photo-1708651145401-6be804cd02d4?auto=format&fit=crop&w=800&q=75" alt="dark watch on a black background" width="800" height="680" loading="lazy"></div><div><h3>Ceramic</h3><p>Hi-tech ceramics, usually zirconium oxide, are extremely scratch resistant and hold their colour indefinitely. Lightweight and smooth to the touch, but can chip or crack if dropped on a hard surface.</p><dl><dt>Character</dt><dd>Smooth, warm to the touch, light</dd><dt>Durability</dt><dd>Highly scratch resistant; can shatter on impact</dd><dt>Best for</dt><dd>Modern looks, bold colours</dd></dl></div></div>
  </div>
</section>

<section class="gems deco" aria-labelledby="gm-t">
  <div class="wrap">
    <div class="head"><div><span class="tag">Gemstones &amp; crystals</span><h2 id="gm-t">Stones you&#8217;ll find on fine watches</h2></div><p style="color:#B9B6C3">From the crystal protecting the dial to stones set around the bezel, gems bring sparkle, colour and remarkable durability.</p></div>
    <div class="gem-grid">
      <article class="gem"><div class="pic"><img src="https://images.unsplash.com/photo-1613843351058-1dd06fda7c02?auto=format&fit=crop&w=600&q=75" alt="blue sapphire-like stone on a white surface" width="600" height="600" loading="lazy"></div><div class="t"><span class="hard">Hardness 9 &middot; Corundum</span><h3>Sapphire</h3><p>Used as synthetic crystal glass for its scratch resistance, and as blue or coloured stones on dials and bezels.</p></div></article>
      <article class="gem"><div class="pic"><img src="https://images.unsplash.com/photo-1653405507161-da7d205d86f4?auto=format&fit=crop&w=600&q=75" alt="three coloured diamonds on a black background" width="600" height="600" loading="lazy"></div><div class="t"><span class="hard">Hardness 10 &middot; Carbon</span><h3>Diamond</h3><p>The hardest natural material. Set as hour markers, around bezels or across entire cases in &ldquo;snow&rdquo; settings.</p></div></article>
      <article class="gem"><div class="pic"><img src="https://images.unsplash.com/photo-1595345705177-ffe090eb0784?auto=format&fit=crop&w=600&q=75" alt="white pearl necklace on grey fabric" width="600" height="600" loading="lazy"></div><div class="t"><span class="hard">Hardness 2.5&ndash;4.5 &middot; Organic</span><h3>Mother-of-pearl</h3><p>The iridescent inner layer of shells, cut thin for luminous dials. Beautiful but delicate, so it is always kept under the crystal.</p></div></article>
    </div>
    <p style="margin-top:30px;text-align:center;color:#C9C6D2">Birthstone of the month: <strong style="color:var(--champ-lt)"><?php echo $birth[0]; ?></strong>, known for its <?php echo $birth[1]; ?>.</p>
  </div>
</section>

<section class="sizer" id="sizer" aria-labelledby="sz-t">
  <div class="wrap">
    <div class="head"><div><span class="tag" style="color:var(--ruby)">Wrist sizer</span><h2 id="sz-t">Find your flattering case size</h2></div><p>Measure around your wrist just above the wrist bone with a soft tape or a strip of paper, then slide to your measurement.</p></div>
    <div class="s-box">
      <div class="l">
        <label for="wrist" style="font-weight:600;font-size:.82rem;letter-spacing:.16em;text-transform:uppercase">Wrist circumference</label>
        <div class="wrist-val" id="wrist-val">16.5 cm (6.5 in)</div>
        <input type="range" id="wrist" min="13" max="22" step="0.5" value="16.5">
        <div class="shapes-row">
          <figure class="shape"><div class="pic"><img src="https://images.unsplash.com/photo-1786052345447-8228974d8cc4?auto=format&fit=crop&w=400&q=75" alt="silver rectangular watch with a dark dial" width="400" height="533" loading="lazy"></div><figcaption>Rectangular</figcaption></figure>
          <figure class="shape"><div class="pic"><img src="https://images.unsplash.com/photo-1786052346185-fd5da0ca962c?auto=format&fit=crop&w=400&q=75" alt="rectangular silver watch with a pink dial" width="400" height="533" loading="lazy"></div><figcaption>Tank-style</figcaption></figure>
          <figure class="shape"><div class="pic"><img src="https://images.unsplash.com/photo-1570943991418-ffa08d952b16?auto=format&fit=crop&w=400&q=75" alt="square gold-coloured watch with a bezel" width="400" height="533" loading="lazy"></div><figcaption>Square</figcaption></figure>
        </div>
      </div>
      <div class="r" aria-live="polite">
        <span class="tag" style="justify-content:center">Suggested round case</span>
        <div class="mm" id="mm">34&ndash;40 mm</div>
        <p id="mm-note" style="margin-top:14px;color:#C9C6D2">You can wear most classic sizes comfortably.</p>
        <p style="font-size:.85rem;color:#9C99A8;margin:0">Rectangular and square watches wear larger than their width suggests, so go a few millimetres smaller.</p>
      </div>
    </div>
  </div>
</section>

<section class="pairing" aria-labelledby="pr-t">
  <div class="wrap p-grid">
    <div class="pic"><img src="https://images.unsplash.com/photo-1736615494527-a0f4a70f1101?auto=format&fit=crop&w=600&q=75" alt="woman's hand wearing a wristwatch" width="600" height="800" loading="lazy"></div>
    <div class="pic"><img src="https://images.unsplash.com/photo-1708221235482-a6e2a807198f?auto=format&fit=crop&w=600&q=75" alt="woman's hand with a gold bracelet" width="600" height="800" loading="lazy"></div>
    <div class="card">
      <span class="tag" style="color:var(--champ-lt)">Pairing</span>
      <h2 id="pr-t">Wearing a watch with jewellery</h2>
      <ul class="rules">
        <li>Match metals, or choose two-tone to bridge gold and silver.</li>
        <li>Let one piece lead: a bold watch with fine jewellery, or the reverse.</li>
        <li>Stack bracelets on the opposite wrist to protect the case.</li>
        <li>Match the scale: delicate chains suit slim, small watches.</li>
        <li>Coordinate strap colours with leather accessories, not stones.</li>
      </ul>
    </div>
  </div>
</section>

<section class="band" aria-labelledby="ca-t">
  <img src="https://images.unsplash.com/photo-1717241364871-e8e369b8327d?auto=format&fit=crop&w=1800&q=75" alt="art deco interior with a column and fireplace" width="1800" height="1200" loading="lazy">
  <div class="wrap band-grid">
    <div>
      <span class="tag">Care rituals</span>
      <h2 id="ca-t">Treat it like fine jewellery</h2>
      <blockquote>A precious watch asks for the same respect as an heirloom ring: a soft cloth, a safe place to rest and an expert eye every few years.</blockquote>
    </div>
    <ol class="care-list">
      <li><p><strong>Remove it first, apply products after.</strong> Perfume, lotion and hairspray can dull metals and harm pearl and leather.</p></li>
      <li><p><strong>Wipe it after wearing</strong> with a soft, lint-free cloth to remove oils and dust from settings.</p></li>
      <li><p><strong>Store separately</strong> so diamonds and sapphire crystals don&#8217;t scratch softer metals and stones.</p></li>
      <li><p><strong>Check settings regularly</strong> for loose stones, especially on rings worn alongside.</p></li>
      <li><p><strong>Service with specialists</strong> who can care for both the movement and the gem settings.</p></li>
    </ol>
  </div>
</section>

<section class="store" aria-labelledby="sto-t">
  <div class="wrap st-grid">
    <div class="pic"><img src="https://images.unsplash.com/photo-1549315309-f0857a904065?auto=format&fit=crop&w=800&q=75" alt="gold watch and pendant resting on a wooden box" width="800" height="1000" loading="lazy"></div>
    <div>
      <span class="tag" style="color:var(--ruby)">Keeping safe</span>
      <h2 id="sto-t">Storing watches and jewellery together</h2>
      <div class="tips">
        <div class="tip"><h3>Individual compartments</h3><p>A lined box with separate spaces stops pieces rubbing against each other.</p></div>
        <div class="tip"><h3>Cool and dry</h3><p>Avoid bathrooms and windowsills; humidity and sunlight age straps and pearls.</p></div>
        <div class="tip"><h3>Away from magnets</h3><p>Keep mechanical watches clear of speakers, laptops and magnetic clasps.</p></div>
        <div class="tip"><h3>Travel cases</h3><p>Use a padded roll or case when travelling, never loose in a bag.</p></div>
      </div>
      <a class="btn btn--ink" href="styling-care.html" style="margin-top:22px">Full styling &amp; care guide</a>
    </div>
  </div>
</section>

<section class="faq" aria-labelledby="fq-t">
  <div class="wrap faq-grid">
    <div><span class="tag" style="color:var(--ruby)">Questions</span><h2 id="fq-t">What readers ask us</h2><p class="muted">Have a question about a material or stone? We&#8217;re happy to help.</p><a class="btn btn--ink" href="contact.html">Ask the editors</a><div class="pic"><img src="https://images.unsplash.com/photo-1466684921455-ee202d43c1aa?auto=format&fit=crop&w=800&q=75" alt="silver watch next to two silver rings" width="800" height="600" loading="lazy"></div></div>
    <div><details open><summary>What are &ldquo;jewels&rdquo; in a watch?</summary><p>In mechanical watches, jewels are tiny synthetic rubies or sapphires used as bearings for the moving parts. Their extremely hard, smooth surfaces reduce friction and wear at pivot points. They are functional rather than decorative, and synthetic corundum has been used since the early twentieth century.</p></details><details><summary>Does a higher jewel count mean a better watch?</summary><p>Not necessarily. A well-designed hand-wound movement is typically fully jewelled with around 17 jewels; automatics and complicated movements need more because they have more moving parts. Jewels that do no functional job add no value.</p></details><details><summary>What is a sapphire crystal?</summary><p>It is a watch glass made from synthetic sapphire, a form of corundum that is extremely hard and very resistant to scratching. Only harder materials, such as diamond, can easily scratch it.</p></details><details><summary>Can I wear a gem-set watch every day?</summary><p>Many can be worn daily with care, but gem settings can loosen with knocks. Have settings checked during routine servicing, and remove the watch for sport, heavy work or swimming unless it is designed for that.</p></details><details><summary>How do I match a watch with my jewellery?</summary><p>A simple guideline is to keep metals in the same family, or choose a two-tone watch to bridge different metals. Balance a bold watch with quieter jewellery, and vice versa.</p></details><details><summary>Does Jewel Frontier sell watches?</summary><p>No. We are an independent educational guide. We do not sell watches or jewellery and we are not affiliated with any brand.</p></details></div>
  </div>
</section>

<section class="nl deco" id="letter" aria-labelledby="nl-t">
  <div class="pic"><img src="https://images.unsplash.com/photo-1751437761644-460ae92e34c9?auto=format&fit=crop&w=1000&q=75" alt="diamond-set watch on a display stand" width="1000" height="1000" loading="lazy"></div>
  <div class="in">
    <span class="tag">Monthly</span>
    <h2 id="nl-t">The Frontier Letter</h2>
    <p style="color:#C9C6D2">One elegant email a month: a material explained, a gemstone story and a seasonal care reminder. No advertising, ever.</p>
    <?php if ($msg): ?><p class="<?php echo $ok ? 'ok' : 'err'; ?>" role="status"><?php echo htmlspecialchars($msg, ENT_QUOTES, 'UTF-8'); ?></p><?php endif; ?>
    <form method="post" action="index.php#letter">
      <label for="le" class="skip">Email address</label>
      <input type="email" id="le" name="nl_email" placeholder="Your email address" required autocomplete="email">
      <input type="text" name="website" tabindex="-1" autocomplete="off" style="display:none" aria-hidden="true">
      <button class="btn" type="submit">Subscribe</button>
    </form>
    <p class="small">See our <a href="privacy-policy.html">Privacy Policy</a>. Unsubscribe any time.</p>
  </div>
</section>
</main>
<footer class="ftr deco">
  <div class="wrap">
    <div class="ftr-grid">
      <div><a class="logo" href="index.php"><svg viewBox="0 0 40 40" aria-hidden="true"><path d="M20 2 L36 14 L20 38 L4 14 Z" fill="none" stroke="#C9A96E" stroke-width="1.6"/><path d="M4 14 H36 M12 14 L20 38 L28 14 M12 14 L20 2 L28 14" fill="none" stroke="#C9A96E" stroke-width="1"/><circle cx="20" cy="18" r="3" fill="#9B1B30"/></svg><span>Jewel Frontier</span></a><p>An independent guide to the watch as jewellery: precious metals, gemstones, crystals and dials, and how to wear and care for them beautifully.</p></div>
      <div><h4>Explore</h4><a href="materials-guide.html">Materials Guide</a><a href="styling-care.html">Styling &amp; Care</a><a href="index.php#jewels">Watch Jewels</a><a href="index.php#sizer">Wrist Sizer</a></div>
      <div><h4>Policies</h4><a href="privacy-policy.html">Privacy Policy</a><a href="terms-and-conditions.html">Terms &amp; Conditions</a><a href="cookie-policy.html">Cookie Policy</a><a href="disclaimer.html">Disclaimer</a><a href="editorial-policy.html">Editorial Policy</a></div>
      <div><h4>Salon</h4><p>181 Mercer Street, New York, NY 10012, United States</p><a href="tel:+18887775845">+1-888-777-5845</a><a href="mailto:hello@jewelfrontier.com">hello@jewelfrontier.com</a></div>
    </div>
    <div class="ftr-base"><span>&copy; <?php echo date("Y"); ?> Jewel Frontier. All rights reserved.</span><span>Photography from Unsplash under the Unsplash License. Not affiliated with any watch or jewellery brand.</span></div>
  </div>
</footer>
<div class="cookie" id="cookie" role="dialog" aria-label="Cookie notice"><p>We use essential cookies and, with your permission, analytics cookies to improve our guides. <a href="cookie-policy.html">Cookie Policy</a></p><button class="y" data-cookie="accepted">Accept</button><button data-cookie="declined">Essential only</button></div>
<script src="assets/js/main.js" defer></script>
</body>
</html>
