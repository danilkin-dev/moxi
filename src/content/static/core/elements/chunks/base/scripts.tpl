<script>
    const SITE_CONFIG = {}
</script>

{* modules *}
<script src="/assets/templates/modules/jquery.min.js{$version}"></script>
<script src="/assets/templates/modules/notyf/notyf.min.js{$version}"></script>

{* main.js *}
<script src="/assets/templates/js/main.js{$version}"></script>

{if $config.ym_identifier}
    {* Yandex.Metrika counter *}
    <script>
       
        document.addEventListener('DOMContentLoaded', () => {
            setTimeout(() => {
                (function(m,e,t,r,i,k,a){ m[i]=m[i]||function(){ (m[i].a=m[i].a||[]).push(arguments) };
                m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a) })
                (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
            
                ym({$config.ym_identifier}, "init", {
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                } );
            }, 4000);
        } );
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/{$config.ym_identifier}" style="position:absolute; left:-9999px;" alt="ym" /></div></noscript>
    {* /Yandex.Metrika counter *}
{/if}

{if $config.ga_identifier}
    {* Global site tag (gtag.js) - Google Analytics *}
    <script async src="https://www.googletagmanager.com/gtag/js?id={$config.ga_identifier}" fetchPriority="low"></script>
    <script>
            
        window.dataLayer = window.dataLayer || [];
        function gtag(){ dataLayer.push(arguments); }
        gtag('js', new Date());
    
        gtag('config', '{$config.ga_identifier}');
        
    </script>
{/if}

{if $config.ym_identifier || $config.ga_identifier}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            setTimeout(() => {
                metricsInit({$config.ym_identifier});
            }, 4000);
        });
    </script>
{/if}

{$config.custom_scripts | ignore}
