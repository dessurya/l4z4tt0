<?php if (!class_exists('CaptchaConfiguration')) { return; }

// BotDetect PHP Captcha configuration options

return [
  // Captcha configuration for example page
  'ExampleCaptcha' => [
    'UserInputID' => 'CaptchaCode',
    'ImageWidth' => 200,
    'ImageHeight' => 50,
    'CustomDarkColor' => '#000000',
    'SoundEnabled' => false,
    'CodeLength' => 4,
    'CodeStyle' => CodeStyle::Numeric,
    'ImageStyle' => ImageStyle::BlackOverlap,
    'CustomDarkColor' => '#000000',
    'DisabledImageStyles' => 'AncientMosaic,Bubbles,Bullets,Bullets2,CaughtInTheNet,CaughtInTheNet2,Chalkboar,Chess,Chess3D,Chipped,Circles,Collage,Corrosion,CrossShadow,CrossShadow2,Cut,Darts,Distortion,Electric,Fingerprints,Flash,Ghostly,Graffiti,Graffiti2,Halo,InBandages,Jail,Lego,Mass,MeltingHeat,MeltingHeat2,Negative,Neon,Neon2,Overlap2,Overlap,PaintMess,Radar,Ripple,Ripple2,Rough,Snow,SpiderWeb,SpiderWeb2,Split,Split2,Stitch,Strippy,SunAndWarmAir,Sunrays,Sunrays2,ThickThinLines,ThickThinLines2,ThinWavyLetters,Vertigo,WantedCircular,Wave,WavyChess,WavyColorLetters,Chalkboard',
  ],
];