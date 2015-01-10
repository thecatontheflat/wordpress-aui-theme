<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EDGE">
    <title>AUI - Default Page</title>
</head>
<body class="aui-page-focused aui-page-focused-large"><!-- For a normal page, omit all 'aui-page-' classes here -->
<div id="page">
    <header id="header" role="banner">
        <nav class="aui-header aui-dropdown2-trigger-group" role="navigation">
            <div class="aui-header-inner">
                <div class="aui-header-primary">
                    <h1 id="logo" class="aui-header-logo aui-header-logo-aui"><a href="http://example.com/"><span class="aui-header-logo-device">AUI</span></a></h1>
                    <ul class="aui-nav">
                        <li><a href="http://example.com/">Nav</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section id="content" role="main">
        <header class="aui-page-header">
            <div class="aui-page-header-inner">
                <div class="aui-page-header-main">
                    <h1>Default Page Layout</h1>
                </div>
            </div>
        </header>
        <nav class="aui-navgroup aui-navgroup-horizontal">
            <div class="aui-navgroup-inner">
                <div class="aui-navgroup-primary">
                    <ul class="aui-nav">
                        <li><a href="http://example.com"/>Nav item</a></li>
                    </ul>
                </div>
                <div class="aui-navgroup-secondary">
                    <ul class="aui-nav">
                        <li><a href="http://example.com/">Nav item</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="aui-page-panel">
            <div class="aui-page-panel-inner">
                <section class="aui-page-panel-content">
                    <h2>Page content heading</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae diam in arcu ultricies gravida sed sed nisl. Curabitur nibh nulla, semper non pharetra eu, suscipit vitae eros. Donec eget lectus elit. Etiam metus diam, adipiscing convallis blandit sit amet, sollicitudin sit amet felis. Phasellus justo elit, rhoncus sed tincidunt a, auctor sit amet turpis. Praesent turpis lectus, aliquet vitae sollicitudin ac, convallis vitae urna. Donec consectetur lacus a lacus tincidunt at varius felis venenatis. Pellentesque dapibus mattis arcu, a vestibulum lacus congue at.</p>
                </section>
            </div>
        </div>
    </section>
    <footer id="footer" role="contentinfo">
        <section class="footer-body">
            <ul>
                <li>I ♥ AUI</li>
            </ul>
            <div id="footer-logo"><a href="http://www.atlassian.com/" target="_blank">Atlassian</a></div>
        </section>
    </footer>
</div>
</body>
</html>

<?php //get_header(); ?>
<!--    <div id="main">-->
<!--        <div id="content">-->
<!--            <h1>Main Area</h1>-->
<!--            --><?php //if (have_posts()) : while (have_posts()) : the_post(); ?>
<!--                <h1>--><?php //the_title(); ?><!--</h1>-->
<!--                <h4>Posted on --><?php //the_time('F jS, Y') ?><!--</h4>-->
<!--                <p>--><?php //the_content(__('(more...)')); ?><!--</p>-->
<!--                <hr> --><?php //endwhile; else: ?>
<!--                <p>--><?php //_e('Sorry, no posts matched your criteria.'); ?><!--</p>--><?php //endif; ?>
<!--        </div>-->
<!--        --><?php //get_sidebar(); ?>
<!--    </div>-->
<!--    <div id="delimiter">-->
<!--    </div>-->
<?php //get_footer(); ?>