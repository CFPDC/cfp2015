<?php
include('includes/functions.php');
?>
<?php get_template('header', 'Title of homepage'); ?>
<div class="container-fluid">
	<div class="bs-docs-section row">
		<div class="col-sm-3 push-down" role="complementary">
			<nav class="bs-docs-sidebar hidden-print hidden-xs hidden-sm affix">
				<ul class="nav bs-docs-sidenav">
					<li>
						<a class="jump-link" href="#grid">Grid system</a>
						<ul class="nav">
							<li>
								<a class="jump-link" href="#grid-intro">Introduction</a>
							</li>
							<li>
								<a class="jump-link" href="#grid-media-queries">Media queries</a>
							</li>
							<li>
								<a class="jump-link" href="#grid-options">Grid options</a>
							</li>
							<li>
								<a class="jump-link" href="#grid-example-basic">Ex: Stacked-to-horizontal</a>
							</li>
							<li>
								<a class="jump-link" href="#grid-example-fluid">Ex: Fluid container</a>
							</li>
							<li>
								<a class="jump-link" href="#grid-example-mixed">Ex: Mobile and desktop</a>
							</li>
							<li>
								<a class="jump-link" href="#grid-example-mixed-complete">Ex: Mobile, tablet, desktop</a>
							</li>
							<li>
								<a class="jump-link" href="#grid-example-wrapping">Ex: Column wrapping</a>
							</li>
							<li>
								<a class="jump-link" href="#grid-responsive-resets">Responsive column resets</a>
							</li>
							<li>
								<a class="jump-link" href="#grid-offsetting">Offsetting columns</a>
							</li>
							<li>
								<a class="jump-link" href="#grid-nesting">Nesting columns</a>
							</li>
							<li>
								<a class="jump-link" href="#grid-column-ordering">Column ordering</a>
							</li>
							<li>
								<a class="jump-link" href="#grid-less">Less mixins and variables</a>
							</li>
						</ul>
					</li>
					<li>
						<a class="jump-link" href="#colors">Colors</a>
					</li>
					<li class="active">
						<a class="jump-link" href="#type">Typography</a>
						<ul class="nav">
							<li class="">
								<a class="jump-link" href="#type-headings">Headings</a>
							</li>
							<li class="">
								<a class="jump-link" href="#type-body-copy">Body copy</a>
							</li>
							<li class="">
								<a class="jump-link" href="#type-inline-text">Inline text elements</a>
							</li>
							<li class="">
								<a class="jump-link" href="#type-alignment">Alignment classes</a>
							</li>
							<li>
								<a class="jump-link" href="#type-transformation">Transformation classes</a>
							</li>
							<li class="">
								<a class="jump-link" href="#type-abbreviations">Abbreviations</a>
							</li>
							<li class="">
								<a class="jump-link" href="#type-addresses">Addresses</a>
							</li>
							<li class="">
								<a class="jump-link" href="#type-blockquotes">Blockquotes</a>
							</li>
							<li class="active">
								<a class="jump-link" href="#type-lists">Lists</a>
							</li>
						</ul>
					</li>
					<li>
						<a class="jump-link" href="#code">Code</a>
						<ul class="nav">
							<li>
								<a class="jump-link" href="#code-inline">Inline</a>
							</li>
							<li>
								<a class="jump-link" href="#code-user-input">User input</a>
							</li>
							<li>
								<a class="jump-link" href="#code-block">Basic block</a>
							</li>
							<li>
								<a class="jump-link" href="#code-variables">Variables</a>
							</li>
							<li>
								<a class="jump-link" href="#code-sample-output">Sample output</a>
							</li>
						</ul>
					</li>
					<li>
						<a class="jump-link" href="#tables">Tables</a>
						<ul class="nav">
							<li>
								<a class="jump-link" href="#tables-example">Basic example</a>
							</li>
							<li>
								<a class="jump-link" href="#tables-striped">Striped rows</a>
							</li>
							<li>
								<a class="jump-link" href="#tables-bordered">Bordered table</a>
							</li>
							<li>
								<a class="jump-link" href="#tables-hover-rows">Hover rows</a>
							</li>
							<li>
								<a class="jump-link" href="#tables-condensed">Condensed table</a>
							</li>
							<li>
								<a class="jump-link" href="#tables-contextual-classes">Contextual classes</a>
							</li>
							<li>
								<a class="jump-link" href="#tables-responsive">Responsive tables</a>
							</li>
						</ul>
					</li>
					<li>
						<a class="jump-link" href="#forms">Forms</a>
						<ul class="nav">
							<li>
								<a class="jump-link" href="#forms-example">Basic example</a>
							</li>
							<li>
								<a class="jump-link" href="#forms-inline">Inline form</a>
							</li>
							<li>
								<a class="jump-link" href="#forms-horizontal">Horizontal form</a>
							</li>
							<li>
								<a class="jump-link" href="#forms-controls">Supported controls</a>
							</li>
							<li>
								<a class="jump-link" href="#forms-controls-static">Static control</a>
							</li>
							<li>
								<a class="jump-link" href="#forms-control-focus">Focus state</a>
							</li>
							<li>
								<a class="jump-link" href="#forms-control-disabled">Disabled state</a>
							</li>
							<li>
								<a class="jump-link" href="#forms-control-readonly">Readonly state</a>
							</li>
							<li>
								<a class="jump-link" href="#forms-control-validation">Validation states</a>
							</li>
							<li>
								<a class="jump-link" href="#forms-control-sizes">Control sizing</a>
							</li>
							<li>
								<a class="jump-link" href="#forms-help-text">Help text</a>
							</li>
						</ul>
					</li>
					<li>
						<a class="jump-link" href="#buttons">Buttons</a>
						<ul class="nav">
							<li>
								<a class="jump-link" href="#buttons-tags">Button tags</a>
							</li>
							<li>
								<a class="jump-link" href="#buttons-options">Options</a>
							</li>
							<li>
								<a class="jump-link" href="#buttons-sizes">Sizes</a>
							</li>
							<li>
								<a class="jump-link" href="#buttons-active">Active state</a>
							</li>
							<li>
								<a class="jump-link" href="#buttons-disabled">Disabled state</a>
							</li>
						</ul>
					</li>
					<li>
						<a class="jump-link" href="#images">Images</a>
						<ul class="nav">
							<li>
								<a class="jump-link" href="#images-responsive">Responsive images</a>
							</li>
							<li>
								<a class="jump-link" href="#images-shapes">Image shapes</a>
							</li>
						</ul>
					</li>
					<li>
						<a class="jump-link" href="#helper-classes">Helper classes</a>
						<ul class="nav">
							<li>
								<a class="jump-link" href="#helper-classes-colors">Contextual colors</a>
							</li>
							<li>
								<a class="jump-link" href="#helper-classes-backgrounds">Contextual backgrounds</a>
							</li>
							<li>
								<a class="jump-link" href="#helper-classes-close">Close icon</a>
							</li>
							<li>
								<a class="jump-link" href="#helper-classes-carets">Carets</a>
							</li>
							<li>
								<a class="jump-link" href="#helper-classes-floats">Quick floats</a>
							</li>
							<li>
								<a class="jump-link" href="#helper-classes-center">Center content blocks</a>
							</li>
							<li>
								<a class="jump-link" href="#helper-classes-clearfix">Clearfix</a>
							</li>
							<li>
								<a class="jump-link" href="#helper-classes-show-hide">Showing and hiding content</a>
							</li>
							<li>
								<a class="jump-link" href="#helper-classes-screen-readers">Screen reader and keyboard navigation content</a>
							</li>
							<li>
								<a class="jump-link" href="#helper-classes-image-replacement">Image replacement</a>
							</li>
						</ul>
					</li>
					<li>
						<a class="jump-link" href="#responsive-utilities">Responsive utilities</a>
						<ul class="nav">
							<li>
								<a class="jump-link" href="#responsive-utilities-classes">Available classes</a>
							</li>
							<li>
								<a class="jump-link" href="#responsive-utilities-print">Print classes</a>
							</li>
							<li>
								<a class="jump-link" href="#responsive-utilities-tests">Test cases</a>
							</li>
						</ul>
					</li>
					<li>
						<a class="jump-link" href="#less">Using Less</a>
						<ul class="nav">
							<li>
								<a class="jump-link" href="#less-bootstrap">Compiling Bootstrap</a>
							</li>
							<li>
								<a class="jump-link" href="#less-variables">Variables</a>
							</li>
							<li>
								<a class="jump-link" href="#less-mixins-vendor">Vendor mixins</a>
							</li>
							<li>
								<a class="jump-link" href="#less-mixins-utility">Utility mixins</a>
							</li>
						</ul>
					</li>
					<li>
						<a class="jump-link" href="#sass">Using Sass</a>
						<ul class="nav">
							<li>
								<a class="jump-link" href="#sass-contents">What's included</a>
							</li>
							<li>
								<a class="jump-link" href="#sass-installation">Installation</a>
							</li>
						</ul>
					</li>
				</ul>
				<a class="back-to-top" class="jump-link" href="#top"> Back to top </a> <a class="jump-link" href="#" class="bs-docs-theme-toggle" role="button">Disable theme preview</a>
			</nav>
		</div>
		<div class="col-sm-9 style-guide-container">
			<div class="clearfix">
				<h1 class="page-header">Style Guide</h1>
				<h2 id="grid"><a class="anchorjs-link " href="#grid" aria-label="Anchor link for: grid" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Grid system</h2>
				<p class="lead">Bootstrap includes a responsive, mobile first fluid grid system that appropriately scales up to 12 columns as the device or viewport size increases. It includes <a href="#grid-example-basic">predefined classes</a> for easy layout options, as well as powerful <a href="#grid-less">mixins for generating more semantic layouts</a>.</p>
				<h3 id="grid-intro"><a class="anchorjs-link " href="#grid-intro" aria-label="Anchor link for: grid intro" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Introduction</h3>
				<p>Grid systems are used for creating page layouts through a series of rows and columns that house your content. Here's how the Bootstrap grid system works:</p>
				<ul>
					<li>Rows must be placed within a <code>.container</code> (fixed-width) or <code>.container-fluid</code> (full-width) for proper alignment and padding.</li>
					<li>Use rows to create horizontal groups of columns.</li>
					<li>Content should be placed within columns, and only columns may be immediate children of rows.</li>
					<li>Predefined grid classes like <code>.row</code> and <code>.col-xs-4</code> are available for quickly making grid layouts. Less mixins can also be used for more semantic layouts.</li>
					<li>Columns create gutters (gaps between column content) via <code>padding</code>. That padding is offset in rows for the first and last column via negative margin on <code>.row</code>s.</li>
					<li>The negative margin is why the examples below are outdented. It's so that content within grid columns is lined up with non-grid content.</li>
					<li>Grid columns are created by specifying the number of twelve available columns you wish to span. For example, three equal columns would use three <code>.col-xs-4</code>.</li>
					<li>If more than 12 columns are placed within a single row, each group of extra columns will, as one unit, wrap onto a new line.</li>
					<li>Grid classes apply to devices with screen widths greater than or equal to the breakpoint sizes, and override grid classes targeted at smaller devices. Therefore, e.g. applying any <code>.col-md-*</code> class to an element will not only affect its styling on medium devices but also on large devices if a <code>.col-lg-*</code> class is not present.</li>
				</ul>
				<p>Look to the examples for applying these principles to your code.</p>
				<h3 id="grid-media-queries"><a class="anchorjs-link " href="#grid-media-queries" aria-label="Anchor link for: grid media queries" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Media queries</h3>
				<p>We use the following media queries in our Less files to create the key breakpoints in our grid system.</p>
				<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="cm">/* Extra small devices (phones, less than 768px) */</span>
				<span class="cm">/* No media query since this is the default in Bootstrap */</span>
				<span class="cm">/* Small devices (tablets, 768px and up) */</span>
				<span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span class="nd">:</span> <span class="o">@</span><span class="nt">screen-sm-min</span><span class="o">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
				<span class="cm">/* Medium devices (desktops, 992px and up) */</span>
				<span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span class="nd">:</span> <span class="o">@</span><span class="nt">screen-md-min</span><span class="o">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
				<span class="cm">/* Large devices (large desktops, 1200px and up) */</span>
<span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span class="nd">:</span> <span class="o">@</span><span class="nt">screen-lg-min</span><span class="o">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span></code></pre>
			</div>
			<p>We occasionally expand on these media queries to include a <code>max-width</code> to limit CSS to a narrower set of devices.</p>
			<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="k">@media</span> <span class="o">(</span><span class="nt">max-width</span><span class="nd">:</span> <span class="o">@</span><span class="nt">screen-xs-max</span><span class="o">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
			<span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span class="nd">:</span> <span class="o">@</span><span class="nt">screen-sm-min</span><span class="o">)</span> <span class="nt">and</span> <span class="o">(</span><span class="nt">max-width</span><span class="nd">:</span> <span class="o">@</span><span class="nt">screen-sm-max</span><span class="o">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
			<span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span class="nd">:</span> <span class="o">@</span><span class="nt">screen-md-min</span><span class="o">)</span> <span class="nt">and</span> <span class="o">(</span><span class="nt">max-width</span><span class="nd">:</span> <span class="o">@</span><span class="nt">screen-md-max</span><span class="o">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
		<span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span class="nd">:</span> <span class="o">@</span><span class="nt">screen-lg-min</span><span class="o">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span></code></pre></div>
		<h3 id="grid-options"><a class="anchorjs-link " href="#grid-options" aria-label="Anchor link for: grid options" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Grid options</h3>
		<p>See how aspects of the Bootstrap grid system work across multiple devices with a handy table.</p>
		<div class="table-responsive">
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th></th>
						<th>
							Extra small devices
							<small>Phones (&lt;768px)</small>
						</th>
						<th>
							Small devices
							<small>Tablets (≥768px)</small>
						</th>
						<th>
							Medium devices
							<small>Desktops (≥992px)</small>
						</th>
						<th>
							Large devices
							<small>Desktops (≥1200px)</small>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th class="text-nowrap" scope="row">Grid behavior</th>
						<td>Horizontal at all times</td>
						<td colspan="3">Collapsed to start, horizontal above breakpoints</td>
					</tr>
					<tr>
						<th class="text-nowrap" scope="row">Container width</th>
						<td>None (auto)</td>
						<td>750px</td>
						<td>970px</td>
						<td>1170px</td>
					</tr>
					<tr>
						<th class="text-nowrap" scope="row">Class prefix</th>
						<td><code>.col-xs-</code></td>
						<td><code>.col-sm-</code></td>
						<td><code>.col-md-</code></td>
						<td><code>.col-lg-</code></td>
					</tr>
					<tr>
						<th class="text-nowrap" scope="row"># of columns</th>
						<td colspan="4">12</td>
					</tr>
					<tr>
						<th class="text-nowrap" scope="row">Column width</th>
						<td class="text-muted">Auto</td>
						<td>~62px</td>
						<td>~81px</td>
						<td>~97px</td>
					</tr>
					<tr>
						<th class="text-nowrap" scope="row">Gutter width</th>
						<td colspan="4">30px (15px on each side of a column)</td>
					</tr>
					<tr>
						<th class="text-nowrap" scope="row">Nestable</th>
						<td colspan="4">Yes</td>
					</tr>
					<tr>
						<th class="text-nowrap" scope="row">Offsets</th>
						<td colspan="4">Yes</td>
					</tr>
					<tr>
						<th class="text-nowrap" scope="row">Column ordering</th>
						<td colspan="4">Yes</td>
					</tr>
				</tbody>
			</table>
		</div>
		<h3 id="grid-example-basic"><a class="anchorjs-link " href="#grid-example-basic" aria-label="Anchor link for: grid example basic" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Example: Stacked-to-horizontal</h3>
		<p>Using a single set of <code>.col-md-*</code> grid classes, you can create a basic grid system that starts out stacked on mobile devices and tablet devices (the extra small to small range) before becoming horizontal on desktop (medium) devices. Place grid columns in any <code>.row</code>.</p>
		<div class="col-xs-12">
			<div class="bs-docs-grid">
				<div class="row show-grid">
					<div class="col-md-1">.col-md-1</div>
					<div class="col-md-1">.col-md-1</div>
					<div class="col-md-1">.col-md-1</div>
					<div class="col-md-1">.col-md-1</div>
					<div class="col-md-1">.col-md-1</div>
					<div class="col-md-1">.col-md-1</div>
					<div class="col-md-1">.col-md-1</div>
					<div class="col-md-1">.col-md-1</div>
					<div class="col-md-1">.col-md-1</div>
					<div class="col-md-1">.col-md-1</div>
					<div class="col-md-1">.col-md-1</div>
					<div class="col-md-1">.col-md-1</div>
				</div>
				<div class="row show-grid">
					<div class="col-md-8">.col-md-8</div>
					<div class="col-md-4">.col-md-4</div>
				</div>
				<div class="row show-grid">
					<div class="col-md-4">.col-md-4</div>
					<div class="col-md-4">.col-md-4</div>
					<div class="col-md-4">.col-md-4</div>
				</div>
				<div class="row show-grid">
					<div class="col-md-6">.col-md-6</div>
					<div class="col-md-6">.col-md-6</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 zero-clipboard"><span class="btn-clipboard">Copy</span></div>
		<div class="col-xs-12 highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
			  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
			  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
			  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
			  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
			  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
			  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
			  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
			  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
			  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
			  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
			  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
			  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
			<span class="nt">&lt;/div&gt;</span>
			<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
			  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-8"</span><span class="nt">&gt;</span>.col-md-8<span class="nt">&lt;/div&gt;</span>
			  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4"</span><span class="nt">&gt;</span>.col-md-4<span class="nt">&lt;/div&gt;</span>
			<span class="nt">&lt;/div&gt;</span>
			<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
			  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4"</span><span class="nt">&gt;</span>.col-md-4<span class="nt">&lt;/div&gt;</span>
			  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4"</span><span class="nt">&gt;</span>.col-md-4<span class="nt">&lt;/div&gt;</span>
			  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4"</span><span class="nt">&gt;</span>.col-md-4<span class="nt">&lt;/div&gt;</span>
			<span class="nt">&lt;/div&gt;</span>
			<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
			  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-6"</span><span class="nt">&gt;</span>.col-md-6<span class="nt">&lt;/div&gt;</span>
			  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-6"</span><span class="nt">&gt;</span>.col-md-6<span class="nt">&lt;/div&gt;</span>
		<span class="nt">&lt;/div&gt;</span></code></pre></div>
		<h3 id="grid-example-fluid"><a class="anchorjs-link " href="#grid-example-fluid" aria-label="Anchor link for: grid example fluid" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Example: Fluid container</h3>
		<p>Turn any fixed-width grid layout into a full-width layout by changing your outermost <code>.container</code> to <code>.container-fluid</code>.</p>
		<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container-fluid"</span><span class="nt">&gt;</span>
		  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
		    ...
		  <span class="nt">&lt;/div&gt;</span>
	<span class="nt">&lt;/div&gt;</span></code></pre></div>
	<h33 id="grid-example-mixed"><a class="anchorjs-link " href="#grid-example-mixed" aria-label="Anchor link for: grid example mixed" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Example: Mobile and desktop</h3>
	<p>Don't want your columns to simply stack in smaller devices? Use the extra small and medium device grid classes by adding <code>.col-xs-*</code> <code>.col-md-*</code> to your columns. See the example below for a better idea of how it all works.</p>
	<div class="col-xs-12 bs-docs-grid">
		<div class="row show-grid">
			<div class="col-xs-12 col-md-8">.col-xs-12 .col-md-8</div>
			<div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
		</div>
		<div class="row show-grid">
			<div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
			<div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
			<div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
		</div>
		<div class="row show-grid">
			<div class="col-xs-6">.col-xs-6</div>
			<div class="col-xs-6">.col-xs-6</div>
		</div>
	</div>
	<div class="col-xs-12 zero-clipboard"><span class="btn-clipboard">Copy</span></div>
	<div class="col-xs-12 highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- Stack the columns on mobile by making one full-width and the other half-width --&gt;</span>
	<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
	  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-12 col-md-8"</span><span class="nt">&gt;</span>.col-xs-12 .col-md-8<span class="nt">&lt;/div&gt;</span>
	  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-md-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-md-4<span class="nt">&lt;/div&gt;</span>
	<span class="nt">&lt;/div&gt;</span>
	<span class="c">&lt;!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop --&gt;</span>
	<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
	  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-md-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-md-4<span class="nt">&lt;/div&gt;</span>
	  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-md-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-md-4<span class="nt">&lt;/div&gt;</span>
	  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-md-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-md-4<span class="nt">&lt;/div&gt;</span>
	<span class="nt">&lt;/div&gt;</span>
	<span class="c">&lt;!-- Columns are always 50% wide, on mobile and desktop --&gt;</span>
	<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
	  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6"</span><span class="nt">&gt;</span>.col-xs-6<span class="nt">&lt;/div&gt;</span>
	  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6"</span><span class="nt">&gt;</span>.col-xs-6<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>
<h3 id="grid-example-mixed-complete"><a class="anchorjs-link " href="#grid-example-mixed-complete" aria-label="Anchor link for: grid example mixed complete" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Example: Mobile, tablet, desktop</h3>
<p>Build on the previous example by creating even more dynamic and powerful layouts with tablet <code>.col-sm-*</code> classes.</p>
<div class="col-xs-12 bs-docs-grid">
	<div class="row show-grid">
		<div class="col-xs-12 col-sm-6 col-md-8">.col-xs-12 .col-sm-6 .col-md-8</div>
		<div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
	</div>
	<div class="row show-grid">
		<div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
		<div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
		<!-- Optional: clear the XS cols if their content doesn't match in height -->
		<div class="clearfix visible-xs-block"></div>
		<div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
	</div>
</div>
<div class="col-xs-12 zero-clipboard"><span class="btn-clipboard">Copy</span></div>
<div class="col-xs-12 highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-12 col-sm-6 col-md-8"</span><span class="nt">&gt;</span>.col-xs-12 .col-sm-6 .col-md-8<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-md-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-md-4<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-sm-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-4<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-sm-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-4<span class="nt">&lt;/div&gt;</span>
  <span class="c">&lt;!-- Optional: clear the XS cols if their content doesn't match in height --&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"clearfix visible-xs-block"</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-sm-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-4<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>
<h3 id="grid-example-wrapping"><a class="anchorjs-link " href="#grid-example-wrapping" aria-label="Anchor link for: grid example wrapping" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Example: Column wrapping</h3>
<p>If more than 12 columns are placed within a single row, each group of extra columns will, as one unit, wrap onto a new line.</p>
<div class="col-xs-12 bs-docs-grid">
<div class="row show-grid">
	<div class="col-xs-9">.col-xs-9</div>
	<div class="col-xs-4">.col-xs-4<br>Since 9 + 4 = 13 &gt; 12, this 4-column-wide div gets wrapped onto a new line as one contiguous unit.</div>
	<div class="col-xs-6">.col-xs-6<br>Subsequent columns continue along the new line.</div>
</div>
</div>
<div class="col-xs-12 zero-clipboard"><span class="btn-clipboard">Copy</span></div>
<div class="col-xs-12 highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-9"</span><span class="nt">&gt;</span>.col-xs-9<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-4"</span><span class="nt">&gt;</span>.col-xs-4<span class="nt">&lt;br&gt;</span>Since 9 + 4 = 13 <span class="ni">&amp;gt;</span> 12, this 4-column-wide div gets wrapped onto a new line as one contiguous unit.<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6"</span><span class="nt">&gt;</span>.col-xs-6<span class="nt">&lt;br&gt;</span>Subsequent columns continue along the new line.<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>
<h3 id="grid-responsive-resets"><a class="anchorjs-link " href="#grid-responsive-resets" aria-label="Anchor link for: grid responsive resets" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Responsive column resets</h3>
<p>With the four tiers of grids available you're bound to run into issues where, at certain breakpoints, your columns don't clear quite right as one is taller than the other. To fix that, use a combination of a <code>.clearfix</code> and our <a href="#responsive-utilities">responsive utility classes</a>.</p>
<div class="bs-docs-grid">
<div class="row show-grid">
<div class="col-xs-6 col-sm-3">
	.col-xs-6 .col-sm-3
	<br>
	Resize your viewport or check it out on your phone for an example.
</div>
<div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
<!-- Add the extra clearfix for only the required viewport -->
<div class="clearfix visible-xs-block"></div>
<div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
<div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
</div>
</div>
<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-sm-3"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-3<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-sm-3"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-3<span class="nt">&lt;/div&gt;</span>
  <span class="c">&lt;!-- Add the extra clearfix for only the required viewport --&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"clearfix visible-xs-block"</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-sm-3"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-3<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-sm-3"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-3<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>
<p>In addition to column clearing at responsive breakpoints, you may need to <strong>reset offsets, pushes, or pulls</strong>. See this in action in <a href="../examples/grid/">the grid example</a>.</p>
<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-5 col-md-6"</span><span class="nt">&gt;</span>.col-sm-5 .col-md-6<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-0"</span><span class="nt">&gt;</span>.col-sm-5 .col-sm-offset-2 .col-md-6 .col-md-offset-0<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-6 col-md-5 col-lg-6"</span><span class="nt">&gt;</span>.col-sm-6 .col-md-5 .col-lg-6<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-6 col-md-5 col-md-offset-2 col-lg-6 col-lg-offset-0"</span><span class="nt">&gt;</span>.col-sm-6 .col-md-5 .col-md-offset-2 .col-lg-6 .col-lg-offset-0<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>
<h3 id="grid-offsetting"><a class="anchorjs-link " href="#grid-offsetting" aria-label="Anchor link for: grid offsetting" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Offsetting columns</h3>
<p>Move columns to the right using <code>.col-md-offset-*</code> classes. These classes increase the left margin of a column by <code>*</code> columns. For example, <code>.col-md-offset-4</code> moves <code>.col-md-4</code> over four columns.</p>
<div class="bs-docs-grid">
<div class="row show-grid">
<div class="col-md-4">.col-md-4</div>
<div class="col-md-4 col-md-offset-4">.col-md-4 .col-md-offset-4</div>
</div>
<div class="row show-grid">
<div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
<div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
</div>
<div class="row show-grid">
<div class="col-md-6 col-md-offset-3">.col-md-6 .col-md-offset-3</div>
</div>
</div>
<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4"</span><span class="nt">&gt;</span>.col-md-4<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4 col-md-offset-4"</span><span class="nt">&gt;</span>.col-md-4 .col-md-offset-4<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-3 col-md-offset-3"</span><span class="nt">&gt;</span>.col-md-3 .col-md-offset-3<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-3 col-md-offset-3"</span><span class="nt">&gt;</span>.col-md-3 .col-md-offset-3<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-6 col-md-offset-3"</span><span class="nt">&gt;</span>.col-md-6 .col-md-offset-3<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>
<h3 id="grid-nesting"><a class="anchorjs-link " href="#grid-nesting" aria-label="Anchor link for: grid nesting" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Nesting columns</h3>
<p>To nest your content with the default grid, add a new <code>.row</code> and set of <code>.col-sm-*</code> columns within an existing <code>.col-sm-*</code> column. Nested rows should include a set of columns that add up to 12 or fewer (it is not required that you use all 12 available columns).</p>
<div class="row show-grid">
<div class="col-sm-9">
Level 1: .col-sm-9
<div class="row show-grid">
<div class="col-xs-8 col-sm-6">
Level 2: .col-xs-8 .col-sm-6
</div>
<div class="col-xs-4 col-sm-6">
Level 2: .col-xs-4 .col-sm-6
</div>
</div>
</div>
</div>
<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-9"</span><span class="nt">&gt;</span>
    Level 1: .col-sm-9
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-8 col-sm-6"</span><span class="nt">&gt;</span>
        Level 2: .col-xs-8 .col-sm-6
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-4 col-sm-6"</span><span class="nt">&gt;</span>
        Level 2: .col-xs-4 .col-sm-6
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>
<h3 id="grid-column-ordering"><a class="anchorjs-link " href="#grid-column-ordering" aria-label="Anchor link for: grid column ordering" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Column ordering</h3>
<p>Easily change the order of our built-in grid columns with <code>.col-md-push-*</code> and <code>.col-md-pull-*</code> modifier classes.</p>
<div class="row show-grid">
<div class="col-md-9 col-md-push-3">.col-md-9 .col-md-push-3</div>
<div class="col-md-3 col-md-pull-9">.col-md-3 .col-md-pull-9</div>
</div>
<div class="zero-clipboard clearfix"><span class="btn-clipboard">Copy</span></div><div class="highlight clearfix"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-9 col-md-push-3"</span><span class="nt">&gt;</span>.col-md-9 .col-md-push-3<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-3 col-md-pull-9"</span><span class="nt">&gt;</span>.col-md-3 .col-md-pull-9<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>
<h3 id="grid-less"><a class="anchorjs-link " href="#grid-less" aria-label="Anchor link for: grid less" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Less mixins and variables</h3>
<p>In addition to <a href="#grid-example-basic">prebuilt grid classes</a> for fast layouts, Bootstrap includes Less variables and mixins for quickly generating your own simple, semantic layouts.</p>
<h4 id="variables"><a class="anchorjs-link " href="#variables" aria-label="Anchor link for: variables" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Variables</h4>
<p>Variables determine the number of columns, the gutter width, and the media query point at which to begin floating columns. We use these to generate the predefined grid classes documented above, as well as for the custom mixins listed below.</p>
<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="k">@grid-columns</span><span class="nd">:</span>              <span class="nt">12</span><span class="p">;</span>
<span class="k">@grid-gutter-width</span><span class="nd">:</span>         <span class="nt">30px</span><span class="p">;</span>
<span class="k">@grid-float-breakpoint</span><span class="nd">:</span>     <span class="nt">768px</span><span class="p">;</span></code></pre></div>
<h4 id="mixins"><a class="anchorjs-link " href="#mixins" aria-label="Anchor link for: mixins" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Mixins</h4>
<p>Mixins are used in conjunction with the grid variables to generate semantic CSS for individual grid columns.</p>
<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="c1">// Creates a wrapper for a series of columns
</span><span class="err">.</span><span class="na">make-row</span><span class="err">(@</span><span class="na">gutter</span><span class="p">:</span> <span class="o">@</span><span class="n">grid-gutter-width</span><span class="p">)</span> <span class="p">{</span>
  <span class="c1">// Then clear the floated columns
</span>  <span class="nc">.clearfix</span><span class="o">()</span><span class="p">;</span>
  <span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span class="nd">:</span> <span class="o">@</span><span class="nt">screen-sm-min</span><span class="o">)</span> <span class="p">{</span>
    <span class="nl">margin-left</span><span class="p">:</span>  <span class="p">(</span><span class="o">@</span><span class="n">gutter</span> <span class="o">/</span> <span class="m">-2</span><span class="p">);</span>
    <span class="nl">margin-right</span><span class="p">:</span> <span class="p">(</span><span class="o">@</span><span class="n">gutter</span> <span class="o">/</span> <span class="m">-2</span><span class="p">);</span>
  <span class="p">}</span>
  <span class="c1">// Negative margin nested rows out to align the content of columns
</span>  <span class="nc">.row</span> <span class="p">{</span>
    <span class="nl">margin-left</span><span class="p">:</span>  <span class="p">(</span><span class="o">@</span><span class="n">gutter</span> <span class="o">/</span> <span class="m">-2</span><span class="p">);</span>
    <span class="nl">margin-right</span><span class="p">:</span> <span class="p">(</span><span class="o">@</span><span class="n">gutter</span> <span class="o">/</span> <span class="m">-2</span><span class="p">);</span>
  <span class="p">}</span>
<span class="p">}</span>
<span class="c1">// Generate the extra small columns
</span><span class="nc">.make-xs-column</span><span class="o">(@</span><span class="nt">columns</span><span class="p">;</span> <span class="k">@gutter</span><span class="nd">:</span> <span class="o">@</span><span class="nt">grid-gutter-width</span><span class="o">)</span> <span class="p">{</span>
  <span class="nl">position</span><span class="p">:</span> <span class="nb">relative</span><span class="p">;</span>
  <span class="c1">// Prevent columns from collapsing when empty
</span>  <span class="nl">min-height</span><span class="p">:</span> <span class="m">1px</span><span class="p">;</span>
  <span class="c1">// Inner gutter via padding
</span>  <span class="nl">padding-left</span><span class="p">:</span>  <span class="p">(</span><span class="o">@</span><span class="n">gutter</span> <span class="o">/</span> <span class="m">2</span><span class="p">);</span>
  <span class="nl">padding-right</span><span class="p">:</span> <span class="p">(</span><span class="o">@</span><span class="n">gutter</span> <span class="o">/</span> <span class="m">2</span><span class="p">);</span>
  <span class="c1">// Calculate width based on number of columns available
</span>  <span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span class="nd">:</span> <span class="o">@</span><span class="nt">grid-float-breakpoint</span><span class="o">)</span> <span class="p">{</span>
    <span class="nl">float</span><span class="p">:</span> <span class="nb">left</span><span class="p">;</span>
    <span class="nl">width</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
  <span class="p">}</span>
<span class="p">}</span>
<span class="c1">// Generate the small columns
</span><span class="nc">.make-sm-column</span><span class="o">(@</span><span class="nt">columns</span><span class="p">;</span> <span class="k">@gutter</span><span class="nd">:</span> <span class="o">@</span><span class="nt">grid-gutter-width</span><span class="o">)</span> <span class="p">{</span>
  <span class="nl">position</span><span class="p">:</span> <span class="nb">relative</span><span class="p">;</span>
  <span class="c1">// Prevent columns from collapsing when empty
</span>  <span class="nl">min-height</span><span class="p">:</span> <span class="m">1px</span><span class="p">;</span>
  <span class="c1">// Inner gutter via padding
</span>  <span class="nl">padding-left</span><span class="p">:</span>  <span class="p">(</span><span class="o">@</span><span class="n">gutter</span> <span class="o">/</span> <span class="m">2</span><span class="p">);</span>
  <span class="nl">padding-right</span><span class="p">:</span> <span class="p">(</span><span class="o">@</span><span class="n">gutter</span> <span class="o">/</span> <span class="m">2</span><span class="p">);</span>
  <span class="c1">// Calculate width based on number of columns available
</span>  <span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span class="nd">:</span> <span class="o">@</span><span class="nt">screen-sm-min</span><span class="o">)</span> <span class="p">{</span>
    <span class="nl">float</span><span class="p">:</span> <span class="nb">left</span><span class="p">;</span>
    <span class="nl">width</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
  <span class="p">}</span>
<span class="p">}</span>
<span class="c1">// Generate the small column offsets
</span><span class="nc">.make-sm-column-offset</span><span class="o">(@</span><span class="nt">columns</span><span class="o">)</span> <span class="p">{</span>
  <span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span class="nd">:</span> <span class="o">@</span><span class="nt">screen-sm-min</span><span class="o">)</span> <span class="p">{</span>
    <span class="nl">margin-left</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
  <span class="p">}</span>
<span class="p">}</span>
<span class="nc">.make-sm-column-push</span><span class="o">(@</span><span class="nt">columns</span><span class="o">)</span> <span class="p">{</span>
  <span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span class="nd">:</span> <span class="o">@</span><span class="nt">screen-sm-min</span><span class="o">)</span> <span class="p">{</span>
    <span class="nl">left</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
  <span class="p">}</span>
<span class="p">}</span>
<span class="nc">.make-sm-column-pull</span><span class="o">(@</span><span class="nt">columns</span><span class="o">)</span> <span class="p">{</span>
  <span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span class="nd">:</span> <span class="o">@</span><span class="nt">screen-sm-min</span><span class="o">)</span> <span class="p">{</span>
    <span class="nl">right</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
  <span class="p">}</span>
<span class="p">}</span>
<span class="c1">// Generate the medium columns
</span><span class="nc">.make-md-column</span><span class="o">(@</span><span class="nt">columns</span><span class="p">;</span> <span class="k">@gutter</span><span class="nd">:</span> <span class="o">@</span><span class="nt">grid-gutter-width</span><span class="o">)</span> <span class="p">{</span>
  <span class="nl">position</span><span class="p">:</span> <span class="nb">relative</span><span class="p">;</span>
  <span class="c1">// Prevent columns from collapsing when empty
</span>  <span class="nl">min-height</span><span class="p">:</span> <span class="m">1px</span><span class="p">;</span>
  <span class="c1">// Inner gutter via padding
</span>  <span class="nl">padding-left</span><span class="p">:</span>  <span class="p">(</span><span class="o">@</span><span class="n">gutter</span> <span class="o">/</span> <span class="m">2</span><span class="p">);</span>
  <span class="nl">padding-right</span><span class="p">:</span> <span class="p">(</span><span class="o">@</span><span class="n">gutter</span> <span class="o">/</span> <span class="m">2</span><span class="p">);</span>
  <span class="c1">// Calculate width based on number of columns available
</span>  <span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span class="nd">:</span> <span class="o">@</span><span class="nt">screen-md-min</span><span class="o">)</span> <span class="p">{</span>
    <span class="nl">float</span><span class="p">:</span> <span class="nb">left</span><span class="p">;</span>
    <span class="nl">width</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
  <span class="p">}</span>
<span class="p">}</span>
<span class="c1">// Generate the medium column offsets
</span><span class="nc">.make-md-column-offset</span><span class="o">(@</span><span class="nt">columns</span><span class="o">)</span> <span class="p">{</span>
  <span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span class="nd">:</span> <span class="o">@</span><span class="nt">screen-md-min</span><span class="o">)</span> <span class="p">{</span>
    <span class="nl">margin-left</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
  <span class="p">}</span>
<span class="p">}</span>
<span class="nc">.make-md-column-push</span><span class="o">(@</span><span class="nt">columns</span><span class="o">)</span> <span class="p">{</span>
  <span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span class="nd">:</span> <span class="o">@</span><span class="nt">screen-md-min</span><span class="o">)</span> <span class="p">{</span>
    <span class="nl">left</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
  <span class="p">}</span>
<span class="p">}</span>
<span class="nc">.make-md-column-pull</span><span class="o">(@</span><span class="nt">columns</span><span class="o">)</span> <span class="p">{</span>
  <span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span class="nd">:</span> <span class="o">@</span><span class="nt">screen-md-min</span><span class="o">)</span> <span class="p">{</span>
    <span class="nl">right</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
  <span class="p">}</span>
<span class="p">}</span>
<span class="c1">// Generate the large columns
</span><span class="nc">.make-lg-column</span><span class="o">(@</span><span class="nt">columns</span><span class="p">;</span> <span class="k">@gutter</span><span class="nd">:</span> <span class="o">@</span><span class="nt">grid-gutter-width</span><span class="o">)</span> <span class="p">{</span>
  <span class="nl">position</span><span class="p">:</span> <span class="nb">relative</span><span class="p">;</span>
  <span class="c1">// Prevent columns from collapsing when empty
</span>  <span class="nl">min-height</span><span class="p">:</span> <span class="m">1px</span><span class="p">;</span>
  <span class="c1">// Inner gutter via padding
</span>  <span class="nl">padding-left</span><span class="p">:</span>  <span class="p">(</span><span class="o">@</span><span class="n">gutter</span> <span class="o">/</span> <span class="m">2</span><span class="p">);</span>
  <span class="nl">padding-right</span><span class="p">:</span> <span class="p">(</span><span class="o">@</span><span class="n">gutter</span> <span class="o">/</span> <span class="m">2</span><span class="p">);</span>
  <span class="c1">// Calculate width based on number of columns available
</span>  <span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span class="nd">:</span> <span class="o">@</span><span class="nt">screen-lg-min</span><span class="o">)</span> <span class="p">{</span>
    <span class="nl">float</span><span class="p">:</span> <span class="nb">left</span><span class="p">;</span>
    <span class="nl">width</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
  <span class="p">}</span>
<span class="p">}</span>
<span class="c1">// Generate the large column offsets
</span><span class="nc">.make-lg-column-offset</span><span class="o">(@</span><span class="nt">columns</span><span class="o">)</span> <span class="p">{</span>
  <span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span class="nd">:</span> <span class="o">@</span><span class="nt">screen-lg-min</span><span class="o">)</span> <span class="p">{</span>
    <span class="nl">margin-left</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
  <span class="p">}</span>
<span class="p">}</span>
<span class="nc">.make-lg-column-push</span><span class="o">(@</span><span class="nt">columns</span><span class="o">)</span> <span class="p">{</span>
  <span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span class="nd">:</span> <span class="o">@</span><span class="nt">screen-lg-min</span><span class="o">)</span> <span class="p">{</span>
    <span class="nl">left</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
  <span class="p">}</span>
<span class="p">}</span>
<span class="nc">.make-lg-column-pull</span><span class="o">(@</span><span class="nt">columns</span><span class="o">)</span> <span class="p">{</span>
  <span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span class="nd">:</span> <span class="o">@</span><span class="nt">screen-lg-min</span><span class="o">)</span> <span class="p">{</span>
    <span class="nl">right</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
  <span class="p">}</span>
<span class="p">}</span></code></pre></div>
<h4 id="example-usage"><a class="anchorjs-link " href="#example-usage" aria-label="Anchor link for: example usage" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Example usage</h4>
<p>You can modify the variables to your own custom values, or just use the mixins with their default values. Here's an example of using the default settings to create a two-column layout with a gap between.</p>
<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="nc">.wrapper</span> <span class="p">{</span>
  <span class="nc">.make-row</span><span class="o">()</span><span class="p">;</span>
<span class="p">}</span>
<span class="nc">.content-main</span> <span class="p">{</span>
  <span class="nc">.make-lg-column</span><span class="o">(</span><span class="nt">8</span><span class="o">)</span><span class="p">;</span>
<span class="p">}</span>
<span class="nc">.content-secondary</span> <span class="p">{</span>
  <span class="nc">.make-lg-column</span><span class="o">(</span><span class="nt">3</span><span class="o">)</span><span class="p">;</span>
  <span class="nc">.make-lg-column-offset</span><span class="o">(</span><span class="nt">1</span><span class="o">)</span><span class="p">;</span>
<span class="p">}</span></code></pre></div>
<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"wrapper"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"content-main"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"content-secondary"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>
<h2 id="colors"> <a class="anchorjs-link" class="jump-link" href="#colors" aria-label="Anchor link for: type" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a> Colors </h2>
<p>
The signature color palette creates a powerful differentiator for the CFP website. Using this palette appropriately and consistently creates an additional layer of distinction.
</p>
<p>
These signature colors may be used extensively both for large areas of color and as accent colors.
</p>
<h3>Primary Colors</h3>
<div class="media col-sm-6 style-example">
<div class="media-left media-middle">
<span class="style-color primary">
<span class="sr-only">
#153B50
</span>
</span>
</div>
<div class="media-body">
<h4 class="media-heading">Primary Blue</h4>
<p>
HEX code: #153B50
</p>
</div>
</div>
<div class="media col-sm-6 style-example">
<div class="media-left media-middle">
<span class="style-color secondary">
<span class="sr-only">
#153B50
</span>
</span>
</div>
<div class="media-body">
<h4 class="media-heading">Secondary Blue</h4>
<p>
HEX code: #487896
</p>
</div>
</div>
<!-- row -->
<h3>Supporting (secondary) Colors</h3>
<div class="media col-sm-4 style-example">
<div class="media-left media-middle">
<span class="style-color tertiary">
<span class="sr-only">
#292929
</span>
</span>
</div>
<div class="media-body">
<h4 class="media-heading">Middle aligned media</h4>
<p>HEX code: #292929</p>
</div>
</div>
<div class="media col-sm-4 style-example">
<div class="media-left media-middle">
<span class="style-color text">
<span class="sr-only">
#FDAF17
</span>
</span>
</div>
<div class="media-body">
<h4 class="media-heading">Middle aligned media</h4>
<p>HEX code: #FDAF17</p>
</div>
</div>
<div class="media col-sm-4 style-example">
<div class="media-left media-middle">
<span class="style-color btn-secondary-color">
<span class="sr-only">
#934683
</span>
</span>
</div>
<div class="media-body">
<h4 class="media-heading">Middle aligned media</h4>
<p>HEX code: #934683</p>
</div>
</div>
<!-- row -->
<h3>Button Colors</h3>
<div class="media col-sm-12">
<!-- Standard button -->
<button type="button" class="btn btn-default">Default</button>
<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
<button type="button" class="btn btn-primary">Primary</button>
<button type="button" class="btn btn-secondary">Secondary</button>
<!-- Indicates a successful or positive action -->
<button type="button" class="btn btn-success">Success</button>
<!-- Contextual button for informational alert messages -->
<button type="button" class="btn btn-info">Info</button>
<!-- Indicates caution should be taken with this action -->
<button type="button" class="btn btn-warning">Warning</button>
<!-- Indicates a dangerous or potentially negative action -->
<button type="button" class="btn btn-danger">Danger</button>
<!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
<button type="button" class="btn btn-link">Link</button>
</div>
</div>
<h2 id="type"> <a class="anchorjs-link " class="jump-link" href="#type" aria-label="Anchor link for: type" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a> Typography </h2>
<!-- Headings -->
<h3 id="type-headings"><a class="anchorjs-link " class="jump-link" href="#type-headings" aria-label="Anchor link for: type headings" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Headings</h3>
<p>
All HTML headings, <code>&lt;h1&gt;</code> through <code>&lt;h6&gt;</code>, are available.
</p>
<div class="bs-example bs-example-type" data-example-id="simple-headings">
<table class="table">
<tbody>
<tr>
<td><h1>Page Title - H1 Element</h1></td>
<td class="type-info">Proxima Nova Regular 40px</td>
</tr>
<tr>
<td><h2 data-name="section-title">Section Title/nonprofit title - H2 Element</h2></td>
<td class="type-info">Libre Baskerville 26px</td>
</tr>
<tr>
<td><h3>Subsection Title - h3</h3></td>
<td class="type-info">Proxima Nova Bold 18px</td>
</tr>
<tr>
<td><h4>h4. heading</h4></td>
<td class="type-info">Proxima Nova Semi-bold  16px</td>
</tr>
<tr>
<td><h5>h5. heading</h5></td>
<td class="type-info">Proxima Nova Regular</td>
</tr>
<tr>
<td><h6>h6. heading</h6></td>
<td class="type-info">Proxima Nova Regular</td>
</tr>
</tbody>
</table>
</div>
<div class="zero-clipboard">
<span class="btn-clipboard">
Example HTML for headings
</span>
</div>
<div class="highlight">
          <pre><code class="language-html" data-lang="html"><span class="nt">&lt;h1&gt;</span>Page Title - H1 Element<span class="nt">&lt;/h1&gt;</span>
<span class="nt">&lt;h2&gt;</span>Section Title/nonprofit title - H2 Element<span class="nt">&lt;/h2&gt;</span>
<span class="nt">&lt;h3&gt;</span>Subsection Title - h3<span class="nt">&lt;/h3&gt;</span>
<span class="nt">&lt;h4&gt;</span>h4. heading<span class="nt">&lt;/h4&gt;</span>
<span class="nt">&lt;h5&gt;</span>h5. heading<span class="nt">&lt;/h5&gt;</span>
<span class="nt">&lt;h6&gt;</span>h6. heading<span class="nt">&lt;/h6&gt;</span>
</code></pre>
</div>
<!-- Body copy -->
<h3 id="type-body-copy"><a class="anchorjs-link " class="jump-link" href="#type-body-copy" aria-label="Anchor link for: type body copy" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Body copy</h3>
<p>
CFP's global default <code>font-size</code> is <strong>16px</strong>, with a <code>line-height</code> of <strong>1.428</strong>. This is applied to the <code>&lt;body&gt;</code> and all paragraphs. In addition, <code>&lt;p&gt;</code> (paragraphs) receive a bottom margin of half their computed line-height (10px by default).
</p>
<div class="bs-example" data-example-id="body-copy">
<p>
Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.
</p>
<p>
Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.
</p>
<p>
Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
</p>
</div>
<div class="zero-clipboard">
<span class="btn-clipboard">
Copy
</span>
</div>
<div class="highlight">
          <pre><code class="language-html" data-lang="html"><span class="nt">&lt;p&gt;</span>...<span class="nt">&lt;/p&gt;</span>
</code></pre>
</div>
<!-- Body copy .lead -->
<h4 id="lead-body-copy"><a class="anchorjs-link " class="jump-link" href="#lead-body-copy" aria-label="Anchor link for: lead body copy" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Lead body copy</h4>
<!-- Melani this was the last one I changed -->
<p>
Make a paragraph stand out by adding <code>.lead</code>.
</p>
<div class="bs-example" data-example-id="lead-copy">
<p class="lead">
Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.
</p>
</div>
<div class="zero-clipboard">
<span class="btn-clipboard">
Copy
</span>
</div>
<div class="highlight">
          <pre><code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"lead"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
</code></pre>
</div>
<!-- Using Less -->
<h3 id="built-with-less"><a class="anchorjs-link " class="jump-link" href="#built-with-less" aria-label="Anchor link for: built with less" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Built with Less</h3>
<p>
The typographic scale is based on two Less variables in <strong>variables.less</strong>: <code>@font-size-base</code> and <code>@line-height-base</code>. The first is the base font-size used throughout and the second is the base line-height. We use those variables and some simple math to create the margins, paddings, and line-heights of all our type and more. Customize them and Bootstrap adapts.
</p>
<!-- Inline text elements -->
<h2 id="type-inline-text"><a class="anchorjs-link " class="jump-link" href="#type-inline-text" aria-label="Anchor link for: type inline text" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Inline text elements</h2>
<h3 id="marked-text"><a class="anchorjs-link " class="jump-link" href="#marked-text" aria-label="Anchor link for: marked text" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Marked text</h3>
<p>
For highlighting a run of text due to its relevance in another context, use the <code>&lt;mark&gt;</code> tag.
</p>
<div class="bs-example" data-example-id="simple-mark">
<p>
You can use the mark tag to
<mark>highlight</mark>
text.
</p>
</div>
<div class="zero-clipboard">
<span class="btn-clipboard">
Copy
</span>
</div>
<div class="highlight">
<pre><code class="language-html" data-lang="html">You can use the mark tag to <span class="nt">&lt;mark&gt;</span>highlight<span class="nt">&lt;/mark&gt;</span> text.</code></pre>
</div>
<h3 id="deleted-text"><a class="anchorjs-link " class="jump-link" href="#deleted-text" aria-label="Anchor link for: deleted text" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Deleted text</h3>
<p>
For indicating blocks of text that have been deleted use the <code>&lt;del&gt;</code> tag.
</p>
<div class="bs-example" data-example-id="simple-del">
<p>
<del>This line of text is meant to be treated as deleted text.</del>
</p>
</div>
<div class="zero-clipboard">
<span class="btn-clipboard">
Copy
</span>
</div>
<div class="highlight">
          <pre><code class="language-html" data-lang="html"><span class="nt">&lt;del&gt;</span>This line of text is meant to be treated as deleted text.<span class="nt">&lt;/del&gt;</span>
</code></pre>
</div>
<h3 id="strikethrough-text"><a class="anchorjs-link " class="jump-link" href="#strikethrough-text" aria-label="Anchor link for: strikethrough text" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Strikethrough text</h3>
<p>
For indicating blocks of text that are no longer relevant use the <code>&lt;s&gt;</code> tag.
</p>
<div class="bs-example" data-example-id="simple-s">
<p>
<s>This line of text is meant to be treated as no longer accurate.</s>
</p>
</div>
<div class="zero-clipboard">
<span class="btn-clipboard">
Copy
</span>
</div>
<div class="highlight">
          <pre><code class="language-html" data-lang="html"><span class="nt">&lt;s&gt;</span>This line of text is meant to be treated as no longer accurate.<span class="nt">&lt;/s&gt;</span>
</code></pre>
</div>
<h3 id="inserted-text"><a class="anchorjs-link " class="jump-link" href="#inserted-text" aria-label="Anchor link for: inserted text" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Inserted text</h3>
<p>
For indicating additions to the document use the <code>&lt;ins&gt;</code> tag.
</p>
<div class="bs-example" data-example-id="simple-ins">
<p>
<ins>This line of text is meant to be treated as an addition to the document.</ins>
</p>
</div>
<div class="zero-clipboard">
<span class="btn-clipboard">
Copy
</span>
</div>
<div class="highlight">
          <pre><code class="language-html" data-lang="html"><span class="nt">&lt;ins&gt;</span>This line of text is meant to be treated as an addition to the document.<span class="nt">&lt;/ins&gt;</span>
</code></pre>
</div>
<h3 id="underlined-text"><a class="anchorjs-link " class="jump-link" href="#underlined-text" aria-label="Anchor link for: underlined text" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Underlined text</h3>
<p>
To underline text use the <code>&lt;u&gt;</code> tag.
</p>
<div class="bs-example" data-example-id="simple-u">
<p>
<u>This line of text will render as underlined</u>
</p>
</div>
<div class="zero-clipboard">
<span class="btn-clipboard">
Copy
</span>
</div>
<div class="highlight">
          <pre><code class="language-html" data-lang="html"><span class="nt">&lt;u&gt;</span>This line of text will render as underlined<span class="nt">&lt;/u&gt;</span>
</code></pre>
</div>
<p>
Make use of HTML's default emphasis tags with lightweight styles.
</p>
<h3 id="small-text"><a class="anchorjs-link " class="jump-link" href="#small-text" aria-label="Anchor link for: small text" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Small text</h3>
<p>
For de-emphasizing inline or blocks of text, use the <code>&lt;small&gt;</code> tag to set text at 85% the size of the parent. Heading elements receive their own <code>font-size</code> for nested <code>&lt;small&gt;</code> elements.
</p>
<p>
You may alternatively use an inline element with <code>.small</code> in place of any <code>&lt;small&gt;</code>.
</p>
<div class="bs-example" data-example-id="simple-small">
<p>
<small>This line of text is meant to be treated as fine print.</small>
</p>
</div>
<div class="zero-clipboard">
<span class="btn-clipboard">
Copy
</span>
</div>
<div class="highlight">
          <pre><code class="language-html" data-lang="html"><span class="nt">&lt;small&gt;</span>This line of text is meant to be treated as fine print.<span class="nt">&lt;/small&gt;</span>
</code></pre>
</div>
<h3 id="bold"><a class="anchorjs-link " class="jump-link" href="#bold" aria-label="Anchor link for: bold" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Bold</h3>
<p>
For emphasizing a snippet of text with a heavier font-weight.
</p>
<div class="bs-example" data-example-id="simple-strong">
<p>
The following snippet of text is <strong>rendered as bold text</strong>.
</p>
</div>
<div class="zero-clipboard">
<span class="btn-clipboard">
Copy
</span>
</div>
<div class="highlight">
          <pre><code class="language-html" data-lang="html"><span class="nt">&lt;strong&gt;</span>rendered as bold text<span class="nt">&lt;/strong&gt;</span>
</code></pre>
</div>
<h3 id="italics"><a class="anchorjs-link " class="jump-link" href="#italics" aria-label="Anchor link for: italics" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Italics</h3>
<p>
For emphasizing a snippet of text with italics.
</p>
<div class="bs-example" data-example-id="simple-em">
<p>
The following snippet of text is
<em>
rendered as italicized text
</em>
.
</p>
</div>
<div class="zero-clipboard">
<span class="btn-clipboard">
Copy
</span>
</div>
<div class="highlight">
          <pre><code class="language-html" data-lang="html"><span class="nt">&lt;em&gt;</span>rendered as italicized text<span class="nt">&lt;/em&gt;</span>
</code></pre>
</div>
<div class="bs-callout bs-callout-info" id="callout-type-b-i-elems">
<h4>Alternate elements</h4>
<p>
Feel free to use <code>&lt;b&gt;</code> and <code>&lt;i&gt;</code> in HTML5. <code>&lt;b&gt;</code> is meant to highlight words or phrases without conveying additional importance while <code>&lt;i&gt;</code> is mostly for voice, technical terms, etc.
</p>
</div>
<h2 id="type-alignment"><a class="anchorjs-link " class="jump-link" href="#type-alignment" aria-label="Anchor link for: type alignment" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Alignment classes</h2>
<p>
Easily realign text to components with text alignment classes.
</p>
<div class="bs-example" data-example-id="text-alignment">
<p class="text-left">
Left aligned text.
</p>
<p class="text-center">
Center aligned text.
</p>
<p class="text-right">
Right aligned text.
</p>
<p class="text-justify">
Justified text.
</p>
<p class="text-nowrap">
No wrap text.
</p>
</div>
<div class="zero-clipboard">
<span class="btn-clipboard">
Copy
</span>
</div>
<div class="highlight">
          <pre><code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-left"</span><span class="nt">&gt;</span>Left aligned text.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-center"</span><span class="nt">&gt;</span>Center aligned text.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-right"</span><span class="nt">&gt;</span>Right aligned text.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-justify"</span><span class="nt">&gt;</span>Justified text.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-nowrap"</span><span class="nt">&gt;</span>No wrap text.<span class="nt">&lt;/p&gt;</span>
</code></pre>
</div>
<h2 id="type-transformation"><a class="anchorjs-link " class="jump-link" href="#type-transformation" aria-label="Anchor link for: type transformation" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Transformation classes</h2>
<p>
Transform text in components with text capitalization classes.
</p>
<div class="bs-example" data-example-id="text-capitalization">
<p class="text-lowercase">
Lowercased text.
</p>
<p class="text-uppercase">
Uppercased text.
</p>
<p class="text-capitalize">
Capitalized text.
</p>
</div>
<div class="zero-clipboard">
<span class="btn-clipboard">
Copy
</span>
</div>
<div class="highlight">
          <pre><code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-lowercase"</span><span class="nt">&gt;</span>Lowercased text.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-uppercase"</span><span class="nt">&gt;</span>Uppercased text.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-capitalize"</span><span class="nt">&gt;</span>Capitalized text.<span class="nt">&lt;/p&gt;</span>
</code></pre>
</div>
<!-- Abbreviations -->
<h2 id="type-abbreviations"><a class="anchorjs-link " class="jump-link" href="#type-abbreviations" aria-label="Anchor link for: type abbreviations" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Abbreviations</h2>
<p>
Stylized implementation of HTML's <code>&lt;abbr&gt;</code> element for abbreviations and acronyms to show the expanded version on hover. Abbreviations with a <code>title</code> attribute have a light dotted bottom border and a help cursor on hover, providing additional context on hover and to users of assistive technologies.
</p>
<h3 id="basic-abbreviation"><a class="anchorjs-link " class="jump-link" href="#basic-abbreviation" aria-label="Anchor link for: basic abbreviation" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Basic abbreviation</h3>
<div class="bs-example" data-example-id="simple-abbr">
<p>
An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.
</p>
</div>
<div class="zero-clipboard">
<span class="btn-clipboard">
Copy
</span>
</div>
<div class="highlight">
          <pre><code class="language-html" data-lang="html"><span class="nt">&lt;abbr</span> <span class="na">title=</span><span class="s">"attribute"</span><span class="nt">&gt;</span>attr<span class="nt">&lt;/abbr&gt;</span>
</code></pre>
</div>
<h3 id="initialism"><a class="anchorjs-link " class="jump-link" href="#initialism" aria-label="Anchor link for: initialism" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Initialism</h3>
<p>
Add <code>.initialism</code> to an abbreviation for a slightly smaller font-size.
</p>
<div class="bs-example" data-example-id="simple-initialism">
<p>
<abbr title="HyperText Markup Language" class="initialism">HTML</abbr> is the best thing since sliced bread.
</p>
</div>
<div class="zero-clipboard">
<span class="btn-clipboard">
Copy
</span>
</div>
<div class="highlight">
          <pre><code class="language-html" data-lang="html"><span class="nt">&lt;abbr</span> <span class="na">title=</span><span class="s">"HyperText Markup Language"</span> <span class="na">class=</span><span class="s">"initialism"</span><span class="nt">&gt;</span>HTML<span class="nt">&lt;/abbr&gt;</span>
</code></pre>
</div>
<!-- Addresses -->
<h2 id="type-addresses"><a class="anchorjs-link " class="jump-link" href="#type-addresses" aria-label="Anchor link for: type addresses" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Addresses</h2>
<p>
Present contact information for the nearest ancestor or the entire body of work. Preserve formatting by ending all lines with <code>&lt;br&gt;</code>.
</p>
<div class="bs-example" data-example-id="simple-address">
<address>
<strong>Twitter, Inc.</strong><br>
795 Folsom Ave, Suite 600<br>
San Francisco, CA 94107<br>
<abbr title="Phone">P:</abbr> (123) 456-7890
</address>
<address>
<strong>Full Name</strong><br>
<a href="mailto:#">first.last@example.com</a>
</address>
</div>
<div class="zero-clipboard">
<span class="btn-clipboard">
Copy
</span>
</div>
<div class="highlight">
          <pre><code class="language-html" data-lang="html"><span class="nt">&lt;address&gt;</span>
  <span class="nt">&lt;strong&gt;</span>Twitter, Inc.<span class="nt">&lt;/strong&gt;&lt;br&gt;</span>
  795 Folsom Ave, Suite 600<span class="nt">&lt;br&gt;</span>
  San Francisco, CA 94107<span class="nt">&lt;br&gt;</span>
  <span class="nt">&lt;abbr</span> <span class="na">title=</span><span class="s">"Phone"</span><span class="nt">&gt;</span>P:<span class="nt">&lt;/abbr&gt;</span> (123) 456-7890
<span class="nt">&lt;/address&gt;</span>
<span class="nt">&lt;address&gt;</span>
  <span class="nt">&lt;strong&gt;</span>Full Name<span class="nt">&lt;/strong&gt;&lt;br&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"mailto:#"</span><span class="nt">&gt;</span>first.last@example.com<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/address&gt;</span>
</code></pre>
</div>
<!-- Blockquotes -->
<h2 id="type-blockquotes"><a class="anchorjs-link " class="jump-link" href="#type-blockquotes" aria-label="Anchor link for: type blockquotes" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Blockquotes</h2>
<p>
For quoting blocks of content from another source within your document.
</p>
<h3 id="default-blockquote"><a class="anchorjs-link " class="jump-link" href="#default-blockquote" aria-label="Anchor link for: default blockquote" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Default blockquote</h3>
<p>
Wrap <code>&lt;blockquote&gt;</code> around any <abbr title="HyperText Markup Language">HTML</abbr> as the quote. For straight quotes, we recommend a <code>&lt;p&gt;</code>.
</p>
<div class="bs-example" data-example-id="simple-blockquote">
<blockquote>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
</p>
</blockquote>
</div>
<div class="zero-clipboard">
<span class="btn-clipboard">
Copy
</span>
</div>
<div class="highlight">
          <pre><code class="language-html" data-lang="html"><span class="nt">&lt;blockquote&gt;</span>
  <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;/blockquote&gt;</span>
</code></pre>
</div>
<h3 id="blockquote-options"><a class="anchorjs-link " class="jump-link" href="#blockquote-options" aria-label="Anchor link for: blockquote options" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Blockquote options</h3>
<p>
Style and content changes for simple variations on a standard <code>&lt;blockquote&gt;</code>.
</p>
<h4 id="naming-a-source"><a class="anchorjs-link " class="jump-link" href="#naming-a-source" aria-label="Anchor link for: naming a source" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Naming a source</h4>
<p>
Add a <code>&lt;footer&gt;</code> for identifying the source. Wrap the name of the source work in <code>&lt;cite&gt;</code>.
</p>
<div class="bs-example" data-example-id="blockquote-cite">
<blockquote>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
</p>
<footer>
Someone famous in <cite title="Source Title">Source Title</cite>
</footer>
</blockquote>
</div>
<div class="zero-clipboard">
<span class="btn-clipboard">
Copy
</span>
</div>
<div class="highlight">
          <pre><code class="language-html" data-lang="html"><span class="nt">&lt;blockquote&gt;</span>
  <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;footer&gt;</span>Someone famous in <span class="nt">&lt;cite</span> <span class="na">title=</span><span class="s">"Source Title"</span><span class="nt">&gt;</span>Source Title<span class="nt">&lt;/cite&gt;&lt;/footer&gt;</span>
<span class="nt">&lt;/blockquote&gt;</span>
</code></pre>
</div>
<h4 id="alternate-displays"><a class="anchorjs-link " class="jump-link" href="#alternate-displays" aria-label="Anchor link for: alternate displays" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Alternate displays</h4>
<p>
Add <code>.blockquote-reverse</code> for a blockquote with right-aligned content.
</p>
<div class="bs-example" style="overflow: hidden;" data-example-id="blockquote-reverse">
<blockquote class="blockquote-reverse">
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
</p>
<footer>
Someone famous in <cite title="Source Title">Source Title</cite>
</footer>
</blockquote>
</div>
<div class="zero-clipboard">
<span class="btn-clipboard">
Copy
</span>
</div>
<div class="highlight">
          <pre><code class="language-html" data-lang="html"><span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"blockquote-reverse"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/blockquote&gt;</span>
</code></pre>
</div>
<!-- Lists -->
<h2 id="type-lists"><a class="anchorjs-link " class="jump-link" href="#type-lists" aria-label="Anchor link for: type lists" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Lists</h2>
<h3 id="unordered"><a class="anchorjs-link " class="jump-link" href="#unordered" aria-label="Anchor link for: unordered" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Unordered</h3>
<p>
A list of items in which the order does
<em>
not
</em>
explicitly matter.
</p>
<div class="bs-example" data-example-id="simple-ul">
<ul>
<li>
Lorem ipsum dolor sit amet
</li>
<li>
Consectetur adipiscing elit
</li>
<li>
Integer molestie lorem at massa
</li>
<li>
Facilisis in pretium nisl aliquet
</li>
<li>
Nulla volutpat aliquam velit
<ul>
<li>
Phasellus iaculis neque
</li>
<li>
Purus sodales ultricies
</li>
<li>
Vestibulum laoreet porttitor sem
</li>
<li>
Ac tristique libero volutpat at
</li>
</ul>
</li>
<li>
Faucibus porta lacus fringilla vel
</li>
<li>
Aenean sit amet erat nunc
</li>
<li>
Eget porttitor lorem
</li>
</ul>
</div>
<div class="zero-clipboard">
<span class="btn-clipboard">
Copy
</span>
</div>
<div class="highlight">
          <pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul&gt;</span>
  <span class="nt">&lt;li&gt;</span>...<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
</code></pre>
</div>
<h3 id="ordered"><a class="anchorjs-link " class="jump-link" href="#ordered" aria-label="Anchor link for: ordered" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Ordered</h3>
<p>
A list of items in which the order
<em>
does
</em>
explicitly matter.
</p>
<div class="bs-example" data-example-id="simple-ol">
<ol>
<li>
Lorem ipsum dolor sit amet
</li>
<li>
Consectetur adipiscing elit
</li>
<li>
Integer molestie lorem at massa
</li>
<li>
Facilisis in pretium nisl aliquet
</li>
<li>
Nulla volutpat aliquam velit
</li>
<li>
Faucibus porta lacus fringilla vel
</li>
<li>
Aenean sit amet erat nunc
</li>
<li>
Eget porttitor lorem
</li>
</ol>
</div>
<div class="zero-clipboard">
<span class="btn-clipboard">
Copy
</span>
</div>
<div class="highlight">
          <pre><code class="language-html" data-lang="html"><span class="nt">&lt;ol&gt;</span>
  <span class="nt">&lt;li&gt;</span>...<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ol&gt;</span>
</code></pre>
</div>
<h3 id="unstyled"><a class="anchorjs-link " class="jump-link" href="#unstyled" aria-label="Anchor link for: unstyled" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Unstyled</h3>
<p>
Remove the default <code>list-style</code> and left margin on list items (immediate children only). <strong>This only applies to immediate children list items</strong>, meaning you will need to add the class for any nested lists as well.
</p>
<div class="bs-example" data-example-id="unstyled-list">
<ul class="list-unstyled">
<li>
Lorem ipsum dolor sit amet
</li>
<li>
Consectetur adipiscing elit
</li>
<li>
Integer molestie lorem at massa
</li>
<li>
Facilisis in pretium nisl aliquet
</li>
<li>
Nulla volutpat aliquam velit
<ul>
<li>
Phasellus iaculis neque
</li>
<li>
Purus sodales ultricies
</li>
<li>
Vestibulum laoreet porttitor sem
</li>
<li>
Ac tristique libero volutpat at
</li>
</ul>
</li>
<li>
Faucibus porta lacus fringilla vel
</li>
<li>
Aenean sit amet erat nunc
</li>
<li>
Eget porttitor lorem
</li>
</ul>
</div>
<div class="zero-clipboard">
<span class="btn-clipboard">
Copy
</span>
</div>
<div class="highlight">
          <pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-unstyled"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li&gt;</span>...<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
</code></pre>
</div>
<h3 id="inline"><a class="anchorjs-link " class="jump-link" href="#inline" aria-label="Anchor link for: inline" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Inline</h3>
<p>
Place all list items on a single line with <code>display: inline-block;</code> and some light padding.
</p>
<div class="bs-example" data-example-id="list-inline">
<ul class="list-inline">
<li>
Lorem ipsum
</li>
<li>
Phasellus iaculis
</li>
<li>
Nulla volutpat
</li>
</ul>
</div>
<div class="zero-clipboard">
<span class="btn-clipboard">
Copy
</span>
</div>
<div class="highlight">
          <pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li&gt;</span>...<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
</code></pre>
</div>
<h3 id="description"><a class="anchorjs-link " class="jump-link" href="#description" aria-label="Anchor link for: description" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Description</h3>
<p>
A list of terms with their associated descriptions.
</p>
<div class="bs-example" data-example-id="simple-dl">
<dl>
<dt>Description lists</dt>
<dd>A description list is perfect for defining terms.</dd>
<dt>Euismod</dt>
<dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
<dd>Donec id elit non mi porta gravida at eget metus.</dd>
<dt>Malesuada porta</dt>
<dd>Etiam porta sem malesuada magna mollis euismod.</dd>
</dl>
</div>
<div class="zero-clipboard">
<span class="btn-clipboard">
Copy
</span>
</div>
<div class="highlight">
          <pre><code class="language-html" data-lang="html"><span class="nt">&lt;dl&gt;</span>
  <span class="nt">&lt;dt&gt;</span>...<span class="nt">&lt;/dt&gt;</span>
  <span class="nt">&lt;dd&gt;</span>...<span class="nt">&lt;/dd&gt;</span>
<span class="nt">&lt;/dl&gt;</span>
</code></pre>
</div>
<h4 id="horizontal-description"><a class="anchorjs-link " class="jump-link" href="#horizontal-description" aria-label="Anchor link for: horizontal description" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Horizontal description</h4>
<p>
Make terms and descriptions in <code>&lt;dl&gt;</code> line up side-by-side. Starts off stacked like default <code>&lt;dl&gt;</code>s, but when the navbar expands, so do these.
</p>
<div class="bs-example" data-example-id="horizontal-dl">
<dl class="dl-horizontal">
<dt>Description lists</dt>
<dd>A description list is perfect for defining terms.</dd>
<dt>Euismod</dt>
<dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
<dd>Donec id elit non mi porta gravida at eget metus.</dd>
<dt>Malesuada porta</dt>
<dd>Etiam porta sem malesuada magna mollis euismod.</dd>
<dt>Felis euismod semper eget lacinia</dt>
<dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
</dl>
</div>
<div class="zero-clipboard">
<span class="btn-clipboard">
Copy
</span>
</div>
<div class="highlight">
          <pre><code class="language-html" data-lang="html"><span class="nt">&lt;dl</span> <span class="na">class=</span><span class="s">"dl-horizontal"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;dt&gt;</span>...<span class="nt">&lt;/dt&gt;</span>
  <span class="nt">&lt;dd&gt;</span>...<span class="nt">&lt;/dd&gt;</span>
<span class="nt">&lt;/dl&gt;</span>
</code></pre>
</div>
<div class="bs-callout bs-callout-info" id="callout-type-dl-truncate">
<h4>Auto-truncating</h4>
<p>
Horizontal description lists will truncate terms that are too long to fit in the left column with <code>text-overflow</code>. In narrower viewports, they will change to the default stacked layout.
</p>
</div>
<h1 id="tables" class="page-header"><a class="anchorjs-link " href="#tables" aria-label="Anchor link for: tables" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Tables</h1>
<h2 id="tables-example"><a class="anchorjs-link " href="#tables-example" aria-label="Anchor link for: tables example" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Basic example</h2>
<p>For basic styling—light padding and only horizontal dividers—add the base class <code>.table</code> to any <code>&lt;table&gt;</code>. It may seem super redundant, but given the widespread use of tables for other plugins like calendars and date pickers, we've opted to isolate our custom table styles.</p>
<div class="bs-example" data-example-id="simple-table">
<table class="table">
<caption>Optional table caption.</caption>
<thead>
<tr>
<th>#</th>
<th>First Name</th>
<th>Last Name</th>
<th>Username</th>
</tr>
</thead>
<tbody>
<tr>
<th scope="row">1</th>
<td>Mark</td>
<td>Otto</td>
<td>@mdo</td>
</tr>
<tr>
<th scope="row">2</th>
<td>Jacob</td>
<td>Thornton</td>
<td>@fat</td>
</tr>
<tr>
<th scope="row">3</th>
<td>Larry</td>
<td>the Bird</td>
<td>@twitter</td>
</tr>
</tbody>
</table>
</div><!-- /example -->
<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/table&gt;</span></code></pre></div>
<h2 id="tables-striped"><a class="anchorjs-link " href="#tables-striped" aria-label="Anchor link for: tables striped" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Striped rows</h2>
<p>Use <code>.table-striped</code> to add zebra-striping to any table row within the <code>&lt;tbody&gt;</code>.</p>
<div class="bs-callout bs-callout-danger" id="callout-tables-striped-ie8">
<h4>Cross-browser compatibility</h4>
<p>Striped tables are styled via the <code>:nth-child</code> CSS selector, which is not available in Internet Explorer 8.</p>
</div>
<div class="bs-example" data-example-id="striped-table">
<table class="table table-striped">
<thead>
<tr>
<th>#</th>
<th>First Name</th>
<th>Last Name</th>
<th>Username</th>
</tr>
</thead>
<tbody>
<tr>
<th scope="row">1</th>
<td>Mark</td>
<td>Otto</td>
<td>@mdo</td>
</tr>
<tr>
<th scope="row">2</th>
<td>Jacob</td>
<td>Thornton</td>
<td>@fat</td>
</tr>
<tr>
<th scope="row">3</th>
<td>Larry</td>
<td>the Bird</td>
<td>@twitter</td>
</tr>
</tbody>
</table>
</div><!-- /example -->
<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-striped"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/table&gt;</span></code></pre></div>
<h2 id="tables-bordered"><a class="anchorjs-link " href="#tables-bordered" aria-label="Anchor link for: tables bordered" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Bordered table</h2>
<p>Add <code>.table-bordered</code> for borders on all sides of the table and cells.</p>
<div class="bs-example" data-example-id="bordered-table">
<table class="table table-bordered">
<thead>
<tr>
<th>#</th>
<th>First Name</th>
<th>Last Name</th>
<th>Username</th>
</tr>
</thead>
<tbody>
<tr>
<th scope="row">1</th>
<td>Mark</td>
<td>Otto</td>
<td>@mdo</td>
</tr>
<tr>
<th scope="row">2</th>
<td>Jacob</td>
<td>Thornton</td>
<td>@fat</td>
</tr>
<tr>
<th scope="row">3</th>
<td>Larry</td>
<td>the Bird</td>
<td>@twitter</td>
</tr>
</tbody>
</table>
</div><!-- /example -->
<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-bordered"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/table&gt;</span></code></pre></div>
<h2 id="tables-hover-rows"><a class="anchorjs-link " href="#tables-hover-rows" aria-label="Anchor link for: tables hover rows" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Hover rows</h2>
<p>Add <code>.table-hover</code> to enable a hover state on table rows within a <code>&lt;tbody&gt;</code>.</p>
<div class="bs-example" data-example-id="hoverable-table">
<table class="table table-hover">
<thead>
<tr>
<th>#</th>
<th>First Name</th>
<th>Last Name</th>
<th>Username</th>
</tr>
</thead>
<tbody>
<tr>
<th scope="row">1</th>
<td>Mark</td>
<td>Otto</td>
<td>@mdo</td>
</tr>
<tr>
<th scope="row">2</th>
<td>Jacob</td>
<td>Thornton</td>
<td>@fat</td>
</tr>
<tr>
<th scope="row">3</th>
<td>Larry</td>
<td>the Bird</td>
<td>@twitter</td>
</tr>
</tbody>
</table>
</div><!-- /example -->
<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-hover"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/table&gt;</span></code></pre></div>
<h2 id="tables-condensed"><a class="anchorjs-link " href="#tables-condensed" aria-label="Anchor link for: tables condensed" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Condensed table</h2>
<p>Add <code>.table-condensed</code> to make tables more compact by cutting cell padding in half.</p>
<div class="bs-example" data-example-id="condensed-table">
<table class="table table-condensed">
<thead>
<tr>
<th>#</th>
<th>First Name</th>
<th>Last Name</th>
<th>Username</th>
</tr>
</thead>
<tbody>
<tr>
<th scope="row">1</th>
<td>Mark</td>
<td>Otto</td>
<td>@mdo</td>
</tr>
<tr>
<th scope="row">2</th>
<td>Jacob</td>
<td>Thornton</td>
<td>@fat</td>
</tr>
<tr>
<th scope="row">3</th>
<td colspan="2">Larry the Bird</td>
<td>@twitter</td>
</tr>
</tbody>
</table>
</div><!-- /example -->
<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-condensed"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/table&gt;</span></code></pre></div>
<h2 id="tables-contextual-classes"><a class="anchorjs-link " href="#tables-contextual-classes" aria-label="Anchor link for: tables contextual classes" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Contextual classes</h2>
<p>Use contextual classes to color table rows or individual cells.</p>
<div class="table-responsive">
<table class="table table-bordered table-striped">
<colgroup>
<col class="col-xs-1">
<col class="col-xs-7">
</colgroup>
<thead>
<tr>
<th>Class</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<th scope="row">
<code>.active</code>
</th>
<td>Applies the hover color to a particular row or cell</td>
</tr>
<tr>
<th scope="row">
<code>.success</code>
</th>
<td>Indicates a successful or positive action</td>
</tr>
<tr>
<th scope="row">
<code>.info</code>
</th>
<td>Indicates a neutral informative change or action</td>
</tr>
<tr>
<th scope="row">
<code>.warning</code>
</th>
<td>Indicates a warning that might need attention</td>
</tr>
<tr>
<th scope="row">
<code>.danger</code>
</th>
<td>Indicates a dangerous or potentially negative action</td>
</tr>
</tbody>
</table>
</div>
<div class="bs-example" data-example-id="contextual-table">
<table class="table">
<thead>
<tr>
<th>#</th>
<th>Column heading</th>
<th>Column heading</th>
<th>Column heading</th>
</tr>
</thead>
<tbody>
<tr class="active">
<th scope="row">1</th>
<td>Column content</td>
<td>Column content</td>
<td>Column content</td>
</tr>
<tr>
<th scope="row">2</th>
<td>Column content</td>
<td>Column content</td>
<td>Column content</td>
</tr>
<tr class="success">
<th scope="row">3</th>
<td>Column content</td>
<td>Column content</td>
<td>Column content</td>
</tr>
<tr>
<th scope="row">4</th>
<td>Column content</td>
<td>Column content</td>
<td>Column content</td>
</tr>
<tr class="info">
<th scope="row">5</th>
<td>Column content</td>
<td>Column content</td>
<td>Column content</td>
</tr>
<tr>
<th scope="row">6</th>
<td>Column content</td>
<td>Column content</td>
<td>Column content</td>
</tr>
<tr class="warning">
<th scope="row">7</th>
<td>Column content</td>
<td>Column content</td>
<td>Column content</td>
</tr>
<tr>
<th scope="row">8</th>
<td>Column content</td>
<td>Column content</td>
<td>Column content</td>
</tr>
<tr class="danger">
<th scope="row">9</th>
<td>Column content</td>
<td>Column content</td>
<td>Column content</td>
</tr>
</tbody>
</table>
</div><!-- /example -->
<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- On rows --&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"active"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"success"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"warning"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"danger"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"info"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="c">&lt;!-- On cells (`td` or `th`) --&gt;</span>
<span class="nt">&lt;tr&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"active"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"success"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"warning"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"danger"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"info"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
<span class="nt">&lt;/tr&gt;</span></code></pre></div>
<div class="bs-callout bs-callout-warning" id="callout-tables-context-accessibility">
<h4>Conveying meaning to assistive technologies</h4>
<p>Using color to add meaning to a table row or individual cell only provides a visual indication, which will not be conveyed to users of assistive technologies – such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (the visible text in the relevant table row/cell), or is included through alternative means, such as additional text hidden with the <code>.sr-only</code> class.</p>
</div>
<h2 id="tables-responsive"><a class="anchorjs-link " href="#tables-responsive" aria-label="Anchor link for: tables responsive" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Responsive tables</h2>
<p>Create responsive tables by wrapping any <code>.table</code> in <code>.table-responsive</code> to make them scroll horizontally on small devices (under 768px). When viewing on anything larger than 768px wide, you will not see any difference in these tables.</p>
<div class="bs-callout bs-callout-warning" id="callout-tables-responsive-overflow">
<h4>Vertical clipping/truncation</h4>
<p>Responsive tables make use of <code>overflow-y: hidden</code>, which clips off any content that goes beyond the bottom or top edges of the table. In particular, this can clip off dropdown menus and other third-party widgets.</p>
</div>
<div class="bs-callout bs-callout-warning" id="callout-tables-responsive-ff-fieldset">
<h4>Firefox and fieldsets</h4>
<p>Firefox has some awkward fieldset styling involving <code>width</code> that interferes with the responsive table. This cannot be overriden without a Firefox-specific hack that we <strong>don't</strong> provide in Bootstrap:</p>
<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-css" data-lang="css"><span class="k">@-moz-document</span> <span class="n">url-prefix</span><span class="p">()</span> <span class="p">{</span>
  <span class="nt">fieldset</span> <span class="p">{</span> <span class="nl">display</span><span class="p">:</span> <span class="nb">table-cell</span><span class="p">;</span> <span class="p">}</span>
<span class="p">}</span></code></pre></div>
<p>For more information, read <a href="https://stackoverflow.com/questions/17408815/fieldset-resizes-wrong-appears-to-have-unremovable-min-width-min-content/17863685#17863685">this Stack Overflow answer</a>.</p>
</div>
<div class="bs-example" data-example-id="simple-responsive-table">
<div class="table-responsive">
<table class="table">
<thead>
<tr>
<th>#</th>
<th>Table heading</th>
<th>Table heading</th>
<th>Table heading</th>
<th>Table heading</th>
<th>Table heading</th>
<th>Table heading</th>
</tr>
</thead>
<tbody>
<tr>
<th scope="row">1</th>
<td>Table cell</td>
<td>Table cell</td>
<td>Table cell</td>
<td>Table cell</td>
<td>Table cell</td>
<td>Table cell</td>
</tr>
<tr>
<th scope="row">2</th>
<td>Table cell</td>
<td>Table cell</td>
<td>Table cell</td>
<td>Table cell</td>
<td>Table cell</td>
<td>Table cell</td>
</tr>
<tr>
<th scope="row">3</th>
<td>Table cell</td>
<td>Table cell</td>
<td>Table cell</td>
<td>Table cell</td>
<td>Table cell</td>
<td>Table cell</td>
</tr>
</tbody>
</table>
</div><!-- /.table-responsive -->
<div class="table-responsive">
<table class="table table-bordered">
<thead>
<tr>
<th>#</th>
<th>Table heading</th>
<th>Table heading</th>
<th>Table heading</th>
<th>Table heading</th>
<th>Table heading</th>
<th>Table heading</th>
</tr>
</thead>
<tbody>
<tr>
<th scope="row">1</th>
<td>Table cell</td>
<td>Table cell</td>
<td>Table cell</td>
<td>Table cell</td>
<td>Table cell</td>
<td>Table cell</td>
</tr>
<tr>
<th scope="row">2</th>
<td>Table cell</td>
<td>Table cell</td>
<td>Table cell</td>
<td>Table cell</td>
<td>Table cell</td>
<td>Table cell</td>
</tr>
<tr>
<th scope="row">3</th>
<td>Table cell</td>
<td>Table cell</td>
<td>Table cell</td>
<td>Table cell</td>
<td>Table cell</td>
<td>Table cell</td>
</tr>
</tbody>
</table>
</div><!-- /.table-responsive -->
</div><!-- /example -->
<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"table-responsive"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table"</span><span class="nt">&gt;</span>
    ...
  <span class="nt">&lt;/table&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>
</div>
</div>
</div>
<?php get_template('footer'); ?>