<html>
   <head>
      <meta name='theme-color' content='white'>
      <meta name='apple-mobile-web-app-status-bar-style' content='white'>
      <meta name='referrer' content='never'>
      <meta name='referrer' content='no-referrer'>
      <meta content='width=device-width, initial-scale=1' name='viewport'>
            <link rel="icon" href="https://h.top4top.io/p_2140lcl0p0.png">
      <title>S9H BOX - BEIN 1</title>
      <link href='favicon2.ico' rel='shortcut icon' type='image/x-icon'>
      <script src='https://cdn.jsdelivr.net/npm/clappr@latest/dist/clappr.min.js'></script>
      <script src='https://cdn.jsdelivr.net/npm/level-selector@latest/dist/level-selector.min.js'></script>
      <script src='https://cdn.jsdelivr.net/npm/clappr-chromecast-plugin@latest/dist/clappr-chromecast-plugin.min.js'></script>
      <script src='https://cdn.jsdelivr.net/npm/clappr-pip@latest/dist/clappr-pip.min.js'></script>
      <script src='https://cdn.jsdelivr.net/npm/dash-shaka-playback@latest/dist/dash-shaka-playback.min.js'></script>
   </head>
   <body 
</script>      <div id='player'></div>
      <script>
         window.onload = function() {
             var player = new Clappr.Player({
           poster: "http://maveniptv.tv:2095/live/Shakereeer/Tbeen/56539.m3u8", 
        position: 'bottom-RIGHT',
watermark: 'https://h.top4top.io/p_2140lcl0p0.png',
        source: 'http://maveniptv.tv:2095/live/Shakereeer/Tbeen/56539.m3u8',
                 parentId: '#player',
                 mimeType: 'audio/mpeg',
                 plugins: [LevelSelector, ChromecastPlugin, ClapprPip.PipButton, ClapprPip.PipPlugin, DashShakaPlayback],
                 height: '100%',
                 width: '100%',
                 autoPlay: true,
                 events: {
                     onReady: function() {
                         var plugin = this.getPlugin('click_to_pause');
                         plugin && plugin.disable();
                     },
                 },
             });
         };
      </script>
