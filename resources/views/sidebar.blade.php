<!-- Main sidebar -->
<div class="sidebar sidebar-main">
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user-material">
            <div class="category-content">
                <div class="sidebar-user-material-content">
                    <a href="#"><img src="assets/images/placeholder.jpg" class="img-circle img-responsive" alt=""></a>
                    <h6>Victoria Baker</h6>
                    <span class="text-size-small">Santa Ana, CA</span>
                </div>

                <div class="sidebar-user-material-menu">
                    <a href="#user-nav" data-toggle="collapse"><span>My account</span> <i class="caret"></i></a>
                </div>
            </div>

            <div class="navigation-wrapper collapse" id="user-nav">
                <ul class="navigation">
                    <li><a href="#"><i class="icon-user-plus"></i> <span>My profile</span></a></li>
                    <li><a href="#"><i class="icon-coins"></i> <span>My balance</span></a></li>
                    <li><a href="#"><i class="icon-comment-discussion"></i> <span><span class="badge bg-teal-400 pull-right">58</span> Messages</span></a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="icon-cog5"></i> <span>Account settings</span></a></li>
                    <li><a href="#"><i class="icon-switch2"></i> <span>Logout</span></a></li>
                </ul>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">

                    <!-- Main -->
                    <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
                    <li class="active"><a href="index.html"><i class="icon-home4"></i> <span>داشبورد</span></a></li>
                    <li>
                        <a href="#"><i class="icon-stack2"></i> <span>منوی اصلی</span></a>
                        <ul>
                            <li><a href="{{{url('/admin/phonebooks')}}}">دفترچه تلفن</a></li>
                            <li><a href="{{{url('/admin/client')}}}">مشتریان</a></li>

                            <li><a href="{{{url('/admin/tasks')}}}">وظایف</a></li>
                            <li><a href="{{{url('/admin/products')}}}">محصولات</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-copy"></i> <span>فرصت ها</span></a>
                        <ul>
                            <li><a href="{{{url('/admin/opportunities')}}}">فرصت ها</a></li>
                            <li><a href="{{{url('/admin/opportunities/create')}}}">ساخت فرصت</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-droplet2"></i> <span>مشتریان</span></a>
                        <ul>
                            <li><a href="{{{url('/admin/client')}}}">مخاطبین</a></li>
                            <li><a href="{{{url('/admin/client/costumers')}}}">مشتریان</a></li>
                            <li><a href="{{{url('/admin/client/create')}}}">اضافه کردن مشتری</a></li>
                            <li><a href="{{{url('/admin/client/import')}}}">درون ریزی</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-stack"></i> <span>محصولات</span></a>
                        <ul>
                            <li><a href="{{{url('/admin/products')}}}">محصولات</a></li>
                            <li><a href="{{{url('/admin/products/create')}}}">ساخت محصول</a></li>
                            <li>
                                <a href="#">دسته بندی</a>
                                <ul>
                                    <li><a href="{{{url('/admin/product_cats')}}}">دسته بندی ها</a></li>
                                    <li><a href="{{{url('/admin/product_cats/create')}}}">ساخت دسته بندی</a></li>
                                </ul>
                            </li>

                        </ul>
                    </li>
                    <!-- /main -->

                    <!-- Forms -->
                    <li class="navigation-header"><span>مالی</span> <i class="icon-menu" title="Forms"></i></li>
                    <li>
                        <a href="{{{url('/admin/invoices')}}}"><i class="icon-pencil3"></i> <span>فاکتور ها</span></a>
                        <ul>
                            <li><a href="{{{url('/admin/invoices/create')}}}">صدور فاکتور</a></li>
                            <li><a href="{{{url('/admin/invoices/')}}}">فاکتور ها</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-file-css"></i> <span>JSON forms</span></a>
                        <ul>
                            <li><a href="alpaca_basic.html">Basic inputs</a></li>
                            <li><a href="alpaca_advanced.html">Advanced inputs</a></li>
                            <li><a href="alpaca_controls.html">Controls</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-footprint"></i> <span>Wizards</span></a>
                        <ul>
                            <li><a href="wizard_steps.html">Steps wizard</a></li>
                            <li><a href="wizard_form.html">Form wizard</a></li>
                            <li><a href="wizard_stepy.html">Stepy wizard</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-spell-check"></i> <span>Editors</span></a>
                        <ul>
                            <li><a href="editor_summernote.html">Summernote editor</a></li>
                            <li><a href="editor_ckeditor.html">CKEditor</a></li>
                            <li><a href="editor_wysihtml5.html">WYSIHTML5 editor</a></li>
                            <li><a href="editor_code.html">Code editor</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-select2"></i> <span>Pickers</span></a>
                        <ul>
                            <li><a href="picker_date.html">Date &amp; time pickers</a></li>
                            <li><a href="picker_color.html">Color pickers</a></li>
                            <li><a href="picker_location.html">Location pickers</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-insert-template"></i> <span>Form layouts</span></a>
                        <ul>
                            <li><a href="form_layout_vertical.html">Vertical form</a></li>
                            <li><a href="form_layout_horizontal.html">Horizontal form</a></li>
                        </ul>
                    </li>
                    <!-- /forms -->

                    <!-- Appearance -->
                    <li class="navigation-header"><span>Appearance</span> <i class="icon-menu" title="Appearance"></i></li>
                    <li>
                        <a href="#"><i class="icon-grid"></i> <span>Components</span></a>
                        <ul>
                            <li><a href="components_modals.html">Modals</a></li>
                            <li><a href="components_dropdowns.html">Dropdown menus</a></li>
                            <li><a href="components_tabs.html">Tabs component</a></li>
                            <li><a href="components_pills.html">Pills component</a></li>
                            <li><a href="components_navs.html">Accordion and navs</a></li>
                            <li><a href="components_buttons.html">Buttons</a></li>
                            <li><a href="components_notifications_pnotify.html">PNotify notifications</a></li>
                            <li><a href="components_notifications_others.html">Other notifications</a></li>
                            <li><a href="components_popups.html">Tooltips and popovers</a></li>
                            <li><a href="components_alerts.html">Alerts</a></li>
                            <li><a href="components_pagination.html">Pagination</a></li>
                            <li><a href="components_labels.html">Labels and badges</a></li>
                            <li><a href="components_loaders.html">Loaders and bars</a></li>
                            <li><a href="components_thumbnails.html">Thumbnails</a></li>
                            <li><a href="components_page_header.html">Page header</a></li>
                            <li><a href="components_breadcrumbs.html">Breadcrumbs</a></li>
                            <li><a href="components_media.html">Media objects</a></li>
                            <li><a href="components_affix.html">Affix and Scrollspy</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-puzzle2"></i> <span>Content appearance</span></a>
                        <ul>
                            <li><a href="appearance_content_panels.html">Content panels</a></li>
                            <li><a href="appearance_panel_heading.html">Panel heading elements</a></li>
                            <li><a href="appearance_panel_footer.html">Panel footer elements</a></li>
                            <li><a href="appearance_draggable_panels.html">Draggable panels</a></li>
                            <li><a href="appearance_text_styling.html">Text styling</a></li>
                            <li><a href="appearance_typography.html">Typography</a></li>
                            <li><a href="appearance_helpers.html">Helper classes</a></li>
                            <li><a href="appearance_syntax_highlighter.html">Syntax highlighter</a></li>
                            <li><a href="appearance_content_grid.html">Grid system</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-gift"></i> <span>Extra components</span></a>
                        <ul>
                            <li><a href="extra_sliders_noui.html">NoUI sliders</a></li>
                            <li><a href="extra_sliders_ion.html">Ion range sliders</a></li>
                            <li><a href="extra_session_timeout.html">Session timeout</a></li>
                            <li><a href="extra_idle_timeout.html">Idle timeout</a></li>
                            <li><a href="extra_trees.html">Dynamic tree views</a></li>
                            <li><a href="extra_context_menu.html">Context menu</a></li>
                            <li><a href="extra_fab.html">Floating action buttons</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-spinner2 spinner"></i> <span>Animations</span></a>
                        <ul>
                            <li><a href="animations_css3.html">CSS3 animations</a></li>
                            <li>
                                <a href="#">Velocity animations</a>
                                <ul>
                                    <li><a href="animations_velocity_basic.html">Basic usage</a></li>
                                    <li><a href="animations_velocity_ui.html">UI pack effects</a></li>
                                    <li><a href="animations_velocity_examples.html">Advanced examples</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-thumbs-up2"></i> <span>Icons</span></a>
                        <ul>
                            <li><a href="icons_glyphicons.html">Glyphicons</a></li>
                            <li><a href="icons_icomoon.html">Icomoon</a></li>
                            <li><a href="icons_fontawesome.html">Font awesome</a></li>
                        </ul>
                    </li>
                    <!-- /appearance -->

                    <!-- Layout -->
                    <li class="navigation-header"><span>Layout</span> <i class="icon-menu" title="Layout options"></i></li>
                    <li>
                        <a href="#"><i class="icon-indent-decrease2"></i> <span>Sidebars</span></a>
                        <ul>
                            <li><a href="sidebar_default_collapse.html">Default collapsible</a></li>
                            <li><a href="sidebar_default_hide.html">Default hideable</a></li>
                            <li><a href="sidebar_mini_collapse.html">Mini collapsible</a></li>
                            <li><a href="sidebar_mini_hide.html">Mini hideable</a></li>
                            <li>
                                <a href="#">Dual sidebar</a>
                                <ul>
                                    <li><a href="sidebar_dual.html">Dual sidebar</a></li>
                                    <li><a href="sidebar_dual_double_collapse.html">Dual double collapse</a></li>
                                    <li><a href="sidebar_dual_double_hide.html">Dual double hide</a></li>
                                    <li><a href="sidebar_dual_swap.html">Swap sidebars</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Double sidebar</a>
                                <ul>
                                    <li><a href="sidebar_double_collapse.html">Collapse main sidebar</a></li>
                                    <li><a href="sidebar_double_hide.html">Hide main sidebar</a></li>
                                    <li><a href="sidebar_double_fix_default.html">Fix default width</a></li>
                                    <li><a href="sidebar_double_fix_mini.html">Fix mini width</a></li>
                                    <li><a href="sidebar_double_visible.html">Opposite sidebar visible</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Detached sidebar</a>
                                <ul>
                                    <li><a href="sidebar_detached_left.html">Left position</a></li>
                                    <li><a href="sidebar_detached_right.html">Right position</a></li>
                                    <li><a href="sidebar_detached_sticky_custom.html">Sticky (custom scroll)</a></li>
                                    <li><a href="sidebar_detached_sticky_native.html">Sticky (native scroll)</a></li>
                                    <li><a href="sidebar_detached_separate.html">Separate categories</a></li>
                                </ul>
                            </li>
                            <li><a href="sidebar_hidden.html">Hidden sidebar</a></li>
                            <li><a href="sidebar_light.html">Light sidebar</a></li>
                            <li><a href="sidebar_components.html">Sidebar components</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-sort"></i> <span>Vertical navigation</span></a>
                        <ul>
                            <li><a href="navigation_vertical_collapsible.html">Collapsible menu</a></li>
                            <li><a href="navigation_vertical_accordion.html">Accordion menu</a></li>
                            <li><a href="navigation_vertical_sizing.html">Navigation sizing</a></li>
                            <li><a href="navigation_vertical_bordered.html">Bordered navigation</a></li>
                            <li><a href="navigation_vertical_right_icons.html">Right icons</a></li>
                            <li><a href="navigation_vertical_labels_badges.html">Labels and badges</a></li>
                            <li><a href="navigation_vertical_disabled.html">Disabled navigation links</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-transmission"></i> <span>Horizontal navigation</span></a>
                        <ul>
                            <li><a href="navigation_horizontal_click.html">Submenu on click</a></li>
                            <li><a href="navigation_horizontal_hover.html">Submenu on hover</a></li>
                            <li><a href="navigation_horizontal_elements.html">With custom elements</a></li>
                            <li><a href="navigation_horizontal_tabs.html">Tabbed navigation</a></li>
                            <li><a href="navigation_horizontal_disabled.html">Disabled navigation links</a></li>
                            <li><a href="navigation_horizontal_mega.html">Horizontal mega menu</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-menu3"></i> <span>Navbars</span></a>
                        <ul>
                            <li><a href="navbar_single.html">Single navbar</a></li>
                            <li>
                                <a href="#">Multiple navbars</a>
                                <ul>
                                    <li><a href="navbar_multiple_navbar_navbar.html">Navbar + navbar</a></li>
                                    <li><a href="navbar_multiple_navbar_header.html">Navbar + header</a></li>
                                    <li><a href="navbar_multiple_header_navbar.html">Header + navbar</a></li>
                                    <li><a href="navbar_multiple_top_bottom.html">Top + bottom</a></li>
                                </ul>
                            </li>
                            <li><a href="navbar_colors.html">Color options</a></li>
                            <li><a href="navbar_sizes.html">Sizing options</a></li>
                            <li><a href="navbar_hideable.html">Hide on scroll</a></li>
                            <li><a href="navbar_components.html">Navbar components</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-tree5"></i> <span>Menu levels</span></a>
                        <ul>
                            <li><a href="#"><i class="icon-IE"></i> Second level</a></li>
                            <li>
                                <a href="#"><i class="icon-firefox"></i> Second level with child</a>
                                <ul>
                                    <li><a href="#"><i class="icon-android"></i> Third level</a></li>
                                    <li>
                                        <a href="#"><i class="icon-apple2"></i> Third level with child</a>
                                        <ul>
                                            <li><a href="#"><i class="icon-html5"></i> Fourth level</a></li>
                                            <li><a href="#"><i class="icon-css3"></i> Fourth level</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><i class="icon-windows"></i> Third level</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><i class="icon-chrome"></i> Second level</a></li>
                        </ul>
                    </li>
                    <!-- /layout -->

                    <!-- Data visualization -->
                    <li class="navigation-header"><span>Data visualization</span> <i class="icon-menu" title="Data visualization"></i></li>
                    <li>
                        <a href="#"><i class="icon-graph"></i> <span>Echarts library</span></a>
                        <ul>
                            <li><a href="echarts_lines_areas.html">Lines and areas</a></li>
                            <li><a href="echarts_columns_waterfalls.html">Columns and waterfalls</a></li>
                            <li><a href="echarts_bars_tornados.html">Bars and tornados</a></li>
                            <li><a href="echarts_scatter.html">Scatter charts</a></li>
                            <li><a href="echarts_pies_donuts.html">Pies and donuts</a></li>
                            <li><a href="echarts_funnels_chords.html">Funnels and chords</a></li>
                            <li><a href="echarts_candlesticks_others.html">Candlesticks and others</a></li>
                            <li><a href="echarts_combinations.html">Chart combinations</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-statistics"></i> <span>D3 library</span></a>
                        <ul>
                            <li><a href="d3_lines_basic.html">Simple lines</a></li>
                            <li><a href="d3_lines_advanced.html">Advanced lines</a></li>
                            <li><a href="d3_bars_basic.html">Simple bars</a></li>
                            <li><a href="d3_bars_advanced.html">Advanced bars</a></li>
                            <li><a href="d3_pies.html">Pie charts</a></li>
                            <li><a href="d3_circle_diagrams.html">Circle diagrams</a></li>
                            <li><a href="d3_tree.html">Tree layout</a></li>
                            <li><a href="d3_other.html">Other charts</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-stats-dots"></i> <span>Dimple library</span></a>
                        <ul>
                            <li>
                                <a href="#">Line charts</a>
                                <ul>
                                    <li><a href="dimple_lines_horizontal.html">Horizontal orientation</a></li>
                                    <li><a href="dimple_lines_vertical.html">Vertical orientation</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Bar charts</a>
                                <ul>
                                    <li><a href="dimple_bars_horizontal.html">Horizontal orientation</a></li>
                                    <li><a href="dimple_bars_vertical.html">Vertical orientation</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Area charts</a>
                                <ul>
                                    <li><a href="dimple_area_horizontal.html">Horizontal orientation</a></li>
                                    <li><a href="dimple_area_vertical.html">Vertical orientation</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Step charts</a>
                                <ul>
                                    <li><a href="dimple_step_horizontal.html">Horizontal orientation</a></li>
                                    <li><a href="dimple_step_vertical.html">Vertical orientation</a></li>
                                </ul>
                            </li>
                            <li><a href="dimple_pies.html">Pie charts</a></li>
                            <li><a href="dimple_rings.html">Ring charts</a></li>
                            <li><a href="dimple_scatter.html">Scatter charts</a></li>
                            <li><a href="dimple_bubble.html">Bubble charts</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-stats-bars"></i> <span>C3 library</span></a>
                        <ul>
                            <li><a href="c3_lines_areas.html">Lines and areas</a></li>
                            <li><a href="c3_bars_pies.html">Bars and pies</a></li>
                            <li><a href="c3_advanced.html">Advanced examples</a></li>
                            <li><a href="c3_axis.html">Chart axis</a></li>
                            <li><a href="c3_grid.html">Grid options</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-google"></i> <span>Google visualization</span></a>
                        <ul>
                            <li><a href="google_lines.html">Line charts</a></li>
                            <li><a href="google_bars.html">Bar charts</a></li>
                            <li><a href="google_pies.html">Pie charts</a></li>
                            <li><a href="google_scatter_bubble.html">Bubble &amp; scatter charts</a></li>
                            <li><a href="google_other.html">Other charts</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-map5"></i> <span>Maps integration</span></a>
                        <ul>
                            <li>
                                <a href="#">Google maps</a>
                                <ul>
                                    <li><a href="maps_google_basic.html">Basics</a></li>
                                    <li><a href="maps_google_controls.html">Controls</a></li>
                                    <li><a href="maps_google_markers.html">Markers</a></li>
                                    <li><a href="maps_google_drawings.html">Map drawings</a></li>
                                    <li><a href="maps_google_layers.html">Layers</a></li>
                                </ul>
                            </li>
                            <li><a href="maps_vector.html">Vector maps</a></li>
                        </ul>
                    </li>
                    <!-- /data visualization -->

                    <!-- Extensions -->
                    <li class="navigation-header"><span>Extensions</span> <i class="icon-menu" title="Extensions"></i></li>
                    <li>
                        <a href="#"><i class="icon-puzzle4"></i> <span>Extensions</span></a>
                        <ul>
                            <li><a href="extension_image_cropper.html">Image cropper</a></li>
                            <li><a href="extension_blockui.html">Block UI</a></li>
                            <li><a href="extension_dnd.html">Drag and drop</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-popout"></i> <span>JQuery UI</span></a>
                        <ul>
                            <li><a href="jqueryui_interactions.html">Interactions</a></li>
                            <li><a href="jqueryui_forms.html">Forms</a></li>
                            <li><a href="jqueryui_components.html">Components</a></li>
                            <li><a href="jqueryui_sliders.html">Sliders</a></li>
                            <li><a href="jqueryui_navigation.html">Navigation</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-upload"></i> <span>File uploaders</span></a>
                        <ul>
                            <li><a href="uploader_plupload.html">Plupload</a></li>
                            <li><a href="uploader_bootstrap.html">Bootstrap file uploader</a></li>
                            <li><a href="uploader_dropzone.html">Dropzone</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-calendar3"></i> <span>Event calendars</span></a>
                        <ul>
                            <li><a href="extension_fullcalendar_views.html">Basic views</a></li>
                            <li><a href="extension_fullcalendar_styling.html">Event styling</a></li>
                            <li><a href="extension_fullcalendar_formats.html">Language and time</a></li>
                            <li><a href="extension_fullcalendar_advanced.html">Advanced usage</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-sphere"></i> <span>Internationalization</span></a>
                        <ul>
                            <li><a href="internationalization_switch_direct.html">Direct translation</a></li>
                            <li><a href="internationalization_switch_query.html">Querystring parameter</a></li>
                            <li><a href="internationalization_on_init.html">Set language on init</a></li>
                            <li><a href="internationalization_after_init.html">Set language after init</a></li>
                            <li><a href="internationalization_fallback.html">Language fallback</a></li>
                            <li><a href="internationalization_callbacks.html">Callbacks</a></li>
                        </ul>
                    </li>
                    <!-- /extensions -->

                    <!-- Tables -->
                    <li class="navigation-header"><span>Tables</span> <i class="icon-menu" title="Tables"></i></li>
                    <li>
                        <a href="#"><i class="icon-table2"></i> <span>Basic tables</span></a>
                        <ul>
                            <li><a href="table_basic.html">Basic examples</a></li>
                            <li><a href="table_sizing.html">Table sizing</a></li>
                            <li><a href="table_borders.html">Table borders</a></li>
                            <li><a href="table_styling.html">Table styling</a></li>
                            <li><a href="table_elements.html">Table elements</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-grid7"></i> <span>Data tables</span></a>
                        <ul>
                            <li><a href="datatable_basic.html">Basic initialization</a></li>
                            <li><a href="datatable_styling.html">Basic styling</a></li>
                            <li><a href="datatable_advanced.html">Advanced examples</a></li>
                            <li><a href="datatable_sorting.html">Sorting options</a></li>
                            <li><a href="datatable_api.html">Using API</a></li>
                            <li><a href="datatable_data_sources.html">Data sources</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-alignment-unalign"></i> <span>Data tables extensions</span></a>
                        <ul>
                            <li><a href="datatable_extension_reorder.html">Columns reorder</a></li>
                            <li><a href="datatable_extension_row_reorder.html">Row reorder</a></li>
                            <li><a href="datatable_extension_fixed_columns.html">Fixed columns</a></li>
                            <li><a href="datatable_extension_fixed_header.html">Fixed header</a></li>
                            <li><a href="datatable_extension_autofill.html">Auto fill</a></li>
                            <li><a href="datatable_extension_key_table.html">Key table</a></li>
                            <li><a href="datatable_extension_scroller.html">Scroller</a></li>
                            <li><a href="datatable_extension_select.html">Select</a></li>
                            <li>
                                <a href="#">Buttons</a>
                                <ul>
                                    <li><a href="datatable_extension_buttons_init.html">Initialization</a></li>
                                    <li><a href="datatable_extension_buttons_flash.html">Flash buttons</a></li>
                                    <li><a href="datatable_extension_buttons_print.html">Print buttons</a></li>
                                    <li><a href="datatable_extension_buttons_html5.html">HTML5 buttons</a></li>
                                </ul>
                            </li>

                            <li><a href="datatable_extension_colvis.html">Columns visibility</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-file-spreadsheet"></i> <span>Handsontable</span></a>
                        <ul>
                            <li><a href="handsontable_basic.html">Basic configuration</a></li>
                            <li><a href="handsontable_advanced.html">Advanced setup</a></li>
                            <li><a href="handsontable_cols.html">Column features</a></li>
                            <li><a href="handsontable_cells.html">Cell features</a></li>
                            <li><a href="handsontable_types.html">Basic cell types</a></li>
                            <li><a href="handsontable_custom_checks.html">Custom &amp; checkboxes</a></li>
                            <li><a href="handsontable_ac_password.html">Autocomplete &amp; password</a></li>
                            <li><a href="handsontable_search.html">Search</a></li>
                            <li><a href="handsontable_context.html">Context menu</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-versions"></i> <span>Responsive options</span></a>
                        <ul>
                            <li><a href="table_responsive.html">Responsive basic tables</a></li>
                            <li><a href="datatable_responsive.html">Responsive data tables</a></li>
                        </ul>
                    </li>
                    <!-- /tables -->

                    <!-- Page kits -->
                    <li class="navigation-header"><span>Page kits</span> <i class="icon-menu" title="Page kits"></i></li>
                    <li>
                        <a href="#"><i class="icon-grid6"></i> <span>General pages</span></a>
                        <ul>
                            <li><a href="general_feed.html">Feed</a></li>
                            <li><a href="general_widgets_content.html">Content widgets</a></li>
                            <li><a href="general_widgets_stats.html">Statistics widgets</a></li>
                            <li><a href="general_embeds.html">Embeds</a></li>
                            <li><a href="general_faq.html">FAQ page</a></li>
                            <li><a href="general_knowledgebase.html">Knowledgebase</a></li>
                            <li>
                                <a href="#">Blog</a>
                                <ul>
                                    <li><a href="blog_classic_v.html">Classic vertical</a></li>
                                    <li><a href="blog_classic_h.html">Classic horizontal</a></li>
                                    <li><a href="blog_grid.html">Grid</a></li>
                                    <li><a href="blog_single.html">Single post</a></li>
                                    <li class="navigation-divider"></li>
                                    <li><a href="blog_sidebar_left.html">Left sidebar</a></li>
                                    <li><a href="blog_sidebar_right.html">Right sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Timelines</a>
                                <ul>
                                    <li><a href="timelines_left.html">Left timeline</a></li>
                                    <li><a href="timelines_right.html">Right timeline</a></li>
                                    <li><a href="timelines_center.html">Centered timeline</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Gallery</a>
                                <ul>
                                    <li><a href="gallery_grid.html">Media grid</a></li>
                                    <li><a href="gallery_titles.html">Media with titles</a></li>
                                    <li><a href="gallery_description.html">Media with description</a></li>
                                    <li><a href="gallery_library.html">Media library</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-wrench3"></i> <span>Service pages</span></a>
                        <ul>
                            <li><a href="service_sitemap.html">Sitemap</a></li>
                            <li>
                                <a href="#">Invoicing</a>
                                <ul>
                                    <li><a href="invoice_template.html">Invoice template</a></li>
                                    <li><a href="invoice_grid.html">Invoice grid</a></li>
                                    <li><a href="invoice_archive.html">Invoice archive</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Authentication</a>
                                <ul>
                                    <li><a href="login_simple.html">Simple login</a></li>
                                    <li><a href="login_advanced.html">More login info</a></li>
                                    <li><a href="login_registration.html">Simple registration</a></li>
                                    <li><a href="login_registration_advanced.html">More registration info</a></li>
                                    <li><a href="login_unlock.html">Unlock user</a></li>
                                    <li><a href="login_password_recover.html">Reset password</a></li>
                                    <li><a href="login_hide_navbar.html">Hide navbar</a></li>
                                    <li><a href="login_transparent.html">Transparent box</a></li>
                                    <li><a href="login_background.html">Background option</a></li>
                                    <li><a href="login_validation.html">With validation</a></li>
                                    <li><a href="login_tabbed.html">Tabbed form</a></li>
                                    <li><a href="login_modals.html">Inside modals</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Error pages</a>
                                <ul>
                                    <li><a href="error_403.html">Error 403</a></li>
                                    <li><a href="error_404.html">Error 404</a></li>
                                    <li><a href="error_405.html">Error 405</a></li>
                                    <li><a href="error_500.html">Error 500</a></li>
                                    <li><a href="error_503.html">Error 503</a></li>
                                    <li><a href="error_offline.html">Offline page</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-people"></i> <span>User pages</span></a>
                        <ul>
                            <li><a href="user_pages_list.html">User list</a></li>
                            <li><a href="user_pages_cards.html">User cards</a></li>
                            <li><a href="user_pages_profile.html">Simple profile</a></li>
                            <li><a href="user_pages_profile_tabbed.html">Tabbed profile</a></li>
                            <li><a href="user_pages_profile_cover.html">Profile with cover</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-cube3"></i> <span>Application pages</span></a>
                        <ul>
                            <li>
                                <a href="#">Task manager</a>
                                <ul>
                                    <li><a href="task_manager_grid.html">Task grid</a></li>
                                    <li><a href="task_manager_list.html">Task list</a></li>
                                    <li><a href="task_manager_detailed.html">Task detailed</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Inbox</a>
                                <ul>
                                    <li><a href="mail_list.html">Mail list</a></li>
                                    <li><a href="mail_list_detached.html">Mail list (detached)</a></li>
                                    <li><a href="mail_read.html">Read mail</a></li>
                                    <li><a href="mail_write.html">Write mail</a></li>
                                    <li class="navigation-divider"></li>
                                    <li><a href="chat_layouts.html">Chat layouts</a></li>
                                    <li><a href="chat_options.html">Chat options</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Search</a>
                                <ul>
                                    <li><a href="search_basic.html">Basic search results</a></li>
                                    <li><a href="search_users.html">User search results</a></li>
                                    <li><a href="search_images.html">Image search results</a></li>
                                    <li><a href="search_videos.html">Video search results</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Job search</a>
                                <ul>
                                    <li><a href="job_list_cards.html">Cards view</a></li>
                                    <li><a href="job_list_panel.html">Panel view</a></li>
                                    <li><a href="job_detailed.html">Job detailed</a></li>
                                    <li><a href="job_apply.html">Apply</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Learning</a>
                                <ul>
                                    <li><a href="learning_list.html">List view</a></li>
                                    <li><a href="learning_grid.html">Grid view</a></li>
                                    <li><a href="learning_detailed.html">Detailed course</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Ecommerce set</a>
                                <ul>
                                    <li><a href="ecommerce_product_list.html">Product list</a></li>
                                    <li><a href="ecommerce_product_grid.html">Product grid</a></li>
                                    <li><a href="ecommerce_orders_history.html">Orders history</a></li>
                                    <li><a href="ecommerce_customers.html">Customers</a></li>
                                    <li><a href="ecommerce_pricing.html">Pricing tables</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- /page kits -->

                </ul>
            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>
<!-- /main sidebar -->











<!-- /////////
///////////////////////////////////////////////////////////////////-->
{{--<div class="main-menu menu-fixed menu-light menu-accordion  menu-bordered  menu-shadow " data-scroll-to-active="true">--}}
    {{--<div class="main-menu-content">--}}
        {{--<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">--}}
            {{--<li class=" nav-item"><a href="index.html"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main">Dashboard</span><span class="badge badge badge-info badge-pill float-right mr-2">3</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a class="menu-item" href="dashboard-ecommerce.html" data-i18n="nav.dash.ecommerce">eCommerce</a>--}}
                    {{--</li>--}}
                    {{--<li class="active"><a class="menu-item" href="dashboard-crypto.html" data-i18n="nav.dash.crypto">Crypto</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="dashboard-sales.html" data-i18n="nav.dash.sales">Sales</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="la la-television"></i><span class="menu-title" data-i18n="nav.templates.main">Templates</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a class="menu-item" href="#" data-i18n="nav.templates.vert.main">Vertical</a>--}}
                        {{--<ul class="menu-content">--}}
                            {{--<li><a class="menu-item" href="../vertical-menu-template" data-i18n="nav.templates.vert.classic_menu">Classic Menu</a>--}}
                            {{--</li>--}}
                            {{--<li><a class="menu-item" href="../vertical-modern-menu-template">Modern Menu</a>--}}
                            {{--</li>--}}
                            {{--<li><a class="menu-item" href="../vertical-compact-menu-template" data-i18n="nav.templates.vert.compact_menu">Compact Menu</a>--}}
                            {{--</li>--}}
                            {{--<li><a class="menu-item" href="../vertical-content-menu-template" data-i18n="nav.templates.vert.content_menu">Content Menu</a>--}}
                            {{--</li>--}}
                            {{--<li><a class="menu-item" href="../vertical-overlay-menu-template" data-i18n="nav.templates.vert.overlay_menu">Overlay Menu</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="#" data-i18n="nav.templates.horz.main">Horizontal</a>--}}
                        {{--<ul class="menu-content">--}}
                            {{--<li><a class="menu-item" href="../horizontal-menu-template" data-i18n="nav.templates.horz.classic">Classic</a>--}}
                            {{--</li>--}}
                            {{--<li><a class="menu-item" href="../horizontal-menu-template-nav" data-i18n="nav.templates.horz.top_icon">Full Width</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" navigation-header">--}}
                {{--<span data-i18n="nav.category.layouts">Layouts</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"--}}
                                                                        {{--data-placement="right" data-original-title="Layouts"></i>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="la la-columns"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Page layouts</span><span class="badge badge badge-pill badge-danger float-right mr-2">New</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a class="menu-item" href="layout-1-column.html" data-i18n="nav.page_layouts.1_column">1 column</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="layout-2-columns.html" data-i18n="nav.page_layouts.2_columns">2 columns</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="#" data-i18n="nav.page_layouts.3_columns.main">Content Sidebar</a>--}}
                        {{--<ul class="menu-content">--}}
                            {{--<li><a class="menu-item" href="layout-content-left-sidebar.html" data-i18n="nav.page_layouts.3_columns.left_sidebar">Left sidebar</a>--}}
                            {{--</li>--}}
                            {{--<li><a class="menu-item" href="layout-content-left-sticky-sidebar.html"--}}
                                   {{--data-i18n="nav.page_layouts.3_columns.left_sticky_sidebar">Left sticky sidebar</a>--}}
                            {{--</li>--}}
                            {{--<li><a class="menu-item" href="layout-content-right-sidebar.html" data-i18n="nav.page_layouts.3_columns.right_sidebar">Right sidebar</a>--}}
                            {{--</li>--}}
                            {{--<li><a class="menu-item" href="layout-content-right-sticky-sidebar.html"--}}
                                   {{--data-i18n="nav.page_layouts.3_columns.right_sticky_sidebar">Right sticky sidebar</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="#" data-i18n="nav.page_layouts.3_columns_detached.main">Content Det. Sidebar</a>--}}
                        {{--<ul class="menu-content">--}}
                            {{--<li><a class="menu-item" href="layout-content-detached-left-sidebar.html"--}}
                                   {{--data-i18n="nav.page_layouts.3_columns_detached.detached_left_sidebar">Detached left sidebar</a>--}}
                            {{--</li>--}}
                            {{--<li><a class="menu-item" href="layout-content-detached-left-sticky-sidebar.html"--}}
                                   {{--data-i18n="nav.page_layouts.3_columns_detached.detached_sticky_left_sidebar">Detached sticky left sidebar</a>--}}
                            {{--</li>--}}
                            {{--<li><a class="menu-item" href="layout-content-detached-right-sidebar.html"--}}
                                   {{--data-i18n="nav.page_layouts.3_columns_detached.detached_right_sidebar">Detached right sidebar</a>--}}
                            {{--</li>--}}
                            {{--<li><a class="menu-item" href="layout-content-detached-right-sticky-sidebar.html"--}}
                                   {{--data-i18n="nav.page_layouts.3_columns_detached.detached_sticky_right_sidebar">Detached sticky right sidebar</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="navigation-divider"></li>--}}
                    {{--<li><a class="menu-item" href="layout-fixed-navbar.html" data-i18n="nav.page_layouts.fixed_navbar">Fixed navbar</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="layout-fixed-navigation.html" data-i18n="nav.page_layouts.fixed_navigation">Fixed navigation</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="layout-fixed-navbar-navigation.html" data-i18n="nav.page_layouts.fixed_navbar_navigation">Fixed navbar &amp; navigation</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="layout-fixed-navbar-footer.html" data-i18n="nav.page_layouts.fixed_navbar_footer">Fixed navbar &amp; footer</a>--}}
                    {{--</li>--}}
                    {{--<li class="navigation-divider"></li>--}}
                    {{--<li><a class="menu-item" href="layout-fixed.html" data-i18n="nav.page_layouts.fixed_layout">Fixed layout</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="layout-boxed.html" data-i18n="nav.page_layouts.boxed_layout">Boxed layout</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="layout-static.html" data-i18n="nav.page_layouts.static_layout">Static layout</a>--}}
                    {{--</li>--}}
                    {{--<li class="navigation-divider"></li>--}}
                    {{--<li><a class="menu-item" href="layout-light.html" data-i18n="nav.page_layouts.light_layout">Light layout</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="layout-dark.html" data-i18n="nav.page_layouts.dark_layout">Dark layout</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="layout-semi-dark.html" data-i18n="nav.page_layouts.semi_dark_layout">Semi dark layout</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="la la-navicon"></i><span class="menu-title" data-i18n="nav.navbars.main">Navbars</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a class="menu-item" href="navbar-light.html" data-i18n="nav.navbars.nav_light">Navbar Light</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="navbar-dark.html" data-i18n="nav.navbars.nav_dark">Navbar Dark</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="navbar-semi-dark.html" data-i18n="nav.navbars.nav_semi">Navbar Semi Dark</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="navbar-brand-center.html" data-i18n="nav.navbars.nav_brand_center">Brand Center</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="navbar-fixed-top.html" data-i18n="nav.navbars.nav_fixed_top">Fixed Top</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="#" data-i18n="nav.navbars.nav_hide_on_scroll.main">Hide on Scroll</a>--}}
                        {{--<ul class="menu-content">--}}
                            {{--<li><a class="menu-item" href="navbar-hide-on-scroll-top.html" data-i18n="nav.navbars.nav_hide_on_scroll.nav_hide_on_scroll_top">Hide on Scroll Top</a>--}}
                            {{--</li>--}}
                            {{--<li><a class="menu-item" href="navbar-hide-on-scroll-bottom.html" data-i18n="nav.navbars.nav_hide_on_scroll.nav_hide_on_scroll_bottom">Hide on Scroll Bottom</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="navbar-components.html" data-i18n="nav.navbars.nav_components">Navbar Components</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="navbar-styling.html" data-i18n="nav.navbars.nav_styling">Navbar Styling</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="la la-arrows-v"></i><span class="menu-title" data-i18n="nav.vertical_nav.main">Vertical Nav</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a class="menu-item" href="#" data-i18n="nav.vertical_nav.vertical_navigation_types.main">Navigation Types</a>--}}
                        {{--<ul class="menu-content">--}}
                            {{--<li><a class="menu-item" href="../vertical-menu-template" data-i18n="nav.vertical_nav.vertical_navigation_types.vertical_menu">Vertical Menu</a>--}}
                            {{--</li>--}}
                            {{--<li><a class="menu-item" href="../vertical-modern-menu-template" data-i18n="nav.vertical_nav.vertical_navigation_types.vertical_modern-menu">Vertical Modern Menu</a>--}}
                            {{--</li>--}}
                            {{--<li><a class="menu-item" href="../vertical-overlay-menu-template" data-i18n="nav.vertical_nav.vertical_navigation_types.vertical_overlay">Vertical Overlay</a>--}}
                            {{--</li>--}}
                            {{--<li><a class="menu-item" href="../vertical-compact-menu-template" data-i18n="nav.vertical_nav.vertical_navigation_types.vertical_compact">Vertical Compact</a>--}}
                            {{--</li>--}}
                            {{--<li><a class="menu-item" href="../vertical-content-menu-template" data-i18n="nav.vertical_nav.vertical_navigation_types.vertical_content">Vertical Content</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="vertical-nav-fixed.html" data-i18n="nav.vertical_nav.vertical_nav_fixed">Fixed Navigation</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="vertical-nav-static.html" data-i18n="nav.vertical_nav.vertical_nav_static">Static Navigation</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="vertical-nav-light.html" data-i18n="nav.vertical_nav.vertical_nav_light">Navigation Light</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="vertical-nav-dark.html" data-i18n="nav.vertical_nav.vertical_nav_dark">Navigation Dark</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="vertical-nav-accordion.html" data-i18n="nav.vertical_nav.vertical_nav_accordion">Accordion Navigation</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="vertical-nav-collapsible.html" data-i18n="nav.vertical_nav.vertical_nav_collapsible">Collapsible Navigation</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="vertical-nav-flipped.html" data-i18n="nav.vertical_nav.vertical_nav_flipped">Flipped Navigation</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="vertical-nav-native-scroll.html" data-i18n="nav.vertical_nav.vertical_nav_native_scroll">Native scroll</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="vertical-nav-right-side-icon.html" data-i18n="nav.vertical_nav.vertical_nav_right_side_icon">Right side icons</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="vertical-nav-bordered.html" data-i18n="nav.vertical_nav.vertical_nav_bordered">Bordered Navigation</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="vertical-nav-disabled-link.html" data-i18n="nav.vertical_nav.vertical_nav_disabled_link">Disabled Navigation</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="vertical-nav-styling.html" data-i18n="nav.vertical_nav.vertical_nav_styling">Navigation Styling</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="vertical-nav-tags-pills.html" data-i18n="nav.vertical_nav.vertical_nav_tags_pills">Tags &amp; Pills</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="la la-arrows-h"></i><span class="menu-title" data-i18n="nav.horz_nav.main">Horizontal Nav</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a class="menu-item" href="#" data-i18n="nav.horz_nav.horizontal_navigation_types.main">Navigation Types</a>--}}
                        {{--<ul class="menu-content">--}}
                            {{--<li><a class="menu-item" href="../horizontal-menu-template" data-i18n="nav.horz_nav.horizontal_navigation_types.horizontal_left_icon_navigation">Left Icon Navigation</a>--}}
                            {{--</li>--}}
                            {{--<li><a class="menu-item" href="../horizontal-menu-template-nav" data-i18n="nav.horz_nav.horizontal_navigation_types.horizontal_menu_template_nav">Top Icon Navigation</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="la la-header"></i><span class="menu-title" data-i18n="nav.page_headers.main">Page Headers</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a class="menu-item" href="headers-breadcrumbs-basic.html" data-i18n="nav.page_headers.headers_breadcrumbs_basic">Breadcrumbs basic</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="headers-breadcrumbs-top.html" data-i18n="nav.page_headers.headers_breadcrumbs_top">Breadcrumbs top</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="headers-breadcrumbs-bottom.html" data-i18n="nav.page_headers.headers_breadcrumbs_bottom">Breadcrumbs bottom</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="headers-breadcrumbs-top-with-description.html"--}}
                           {{--data-i18n="nav.page_headers.headers_breadcrumbs_top_with_description">Breadcrumbs top with desc</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="headers-breadcrumbs-with-button.html" data-i18n="nav.page_headers.headers_breadcrumbs_with_button">Breadcrumbs with button</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="headers-breadcrumbs-with-round-button.html"--}}
                           {{--data-i18n="nav.page_headers.headers_breadcrumbs_with_round_button">Breadcrumbs with button 2</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="headers-breadcrumbs-with-button-group.html"--}}
                           {{--data-i18n="nav.page_headers.headers_breadcrumbs_with_button_group">Breadcrumbs with buttons</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="headers-breadcrumbs-with-description.html"--}}
                           {{--data-i18n="nav.page_headers.headers_breadcrumbs_breadcrumbs_with_description">Breadcrumbs with desc</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="headers-breadcrumbs-with-search.html" data-i18n="nav.page_headers.headers_breadcrumbs_breadcrumbs_with_search">Breadcrumbs with search</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="headers-breadcrumbs-with-stats.html" data-i18n="nav.page_headers.headers_breadcrumbs_breadcrumbs_with_stats">Breadcrumbs with stats</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="la la-download"></i><span class="menu-title" data-i18n="nav.footers.main">Footers</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a class="menu-item" href="footer-light.html" data-i18n="nav.footers.footer_light">Footer Light</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="footer-dark.html" data-i18n="nav.footers.footer_dark">Footer Dark</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="footer-transparent.html" data-i18n="nav.footers.footer_transparent">Footer Transparent</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="footer-fixed.html" data-i18n="nav.footers.footer_fixed">Footer Fixed</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="footer-components.html" data-i18n="nav.footers.footer_components">Footer Components</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" navigation-header">--}}
                {{--<span data-i18n="nav.category.general">General</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"--}}
                                                                        {{--data-placement="right" data-original-title="General"></i>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="la la-paint-brush"></i><span class="menu-title" data-i18n="nav.color_palette.main">Color Palette</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a class="menu-item" href="color-palette-primary.html" data-i18n="nav.color_palette.color_palette_primary">Primary palette</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="color-palette-danger.html" data-i18n="nav.color_palette.color_palette_danger">Danger palette</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="color-palette-success.html" data-i18n="nav.color_palette.color_palette_success">Success palette</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="color-palette-warning.html" data-i18n="nav.color_palette.color_palette_warning">Warning palette</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="color-palette-info.html" data-i18n="nav.color_palette.color_palette_info">Info palette</a>--}}
                    {{--</li>--}}
                    {{--<li class="navigation-divider"></li>--}}
                    {{--<li><a class="menu-item" href="color-palette-red.html" data-i18n="nav.color_palette.color_palette_red">Red palette</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="color-palette-pink.html" data-i18n="nav.color_palette.color_palette_pink">Pink palette</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="color-palette-purple.html" data-i18n="nav.color_palette.color_palette_purple">Purple palette</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="color-palette-blue.html" data-i18n="nav.color_palette.color_palette_blue">Blue palette</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="color-palette-cyan.html" data-i18n="nav.color_palette.color_palette_cyan">Cyan palette</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="color-palette-teal.html" data-i18n="nav.color_palette.color_palette_teal">Teal palette</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="color-palette-yellow.html" data-i18n="nav.color_palette.color_palette_yellow">Yellow palette</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="color-palette-amber.html" data-i18n="nav.color_palette.color_palette_amber">Amber palette</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="color-palette-blue-grey.html" data-i18n="nav.color_palette.color_palette_blue_grey">Blue Grey palette</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="la la-puzzle-piece"></i><span class="menu-title" data-i18n="nav.starter_kit.main">Starter kit</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a class="menu-item" href="../../../starter-kit/rtl/vertical-menu-template/layout-1-column.html"--}}
                           {{--data-i18n="nav.starter_kit.1_column">1 column</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="../../../starter-kit/rtl/vertical-menu-template/layout-2-columns.html"--}}
                           {{--data-i18n="nav.starter_kit.2_columns">2 columns</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="#" data-i18n="nav.starter_kit.3_columns_detached.main">Content Det. Sidebar</a>--}}
                        {{--<ul class="menu-content">--}}
                            {{--<li><a class="menu-item" href="../../../starter-kit/rtl/vertical-menu-template/layout-content-detached-left-sidebar.html"--}}
                                   {{--data-i18n="nav.starter_kit.3_columns_detached.3_columns_detached_left_sidebar">Detached left sidebar</a>--}}
                            {{--</li>--}}
                            {{--<li><a class="menu-item" href="../../../starter-kit/rtl/vertical-menu-template/layout-content-detached-left-sticky-sidebar.html"--}}
                                   {{--data-i18n="nav.starter_kit.3_columns_detached.3_columns_detached_sticky_left_sidebar">Detached sticky left sidebar</a>--}}
                            {{--</li>--}}
                            {{--<li><a class="menu-item" href="../../../starter-kit/rtl/vertical-menu-template/layout-content-detached-right-sidebar.html"--}}
                                   {{--data-i18n="nav.starter_kit.3_columns_detached.3_columns_detached_right_sidebar">Detached right sidebar</a>--}}
                            {{--</li>--}}
                            {{--<li><a class="menu-item" href="../../../starter-kit/rtl/vertical-menu-template/layout-content-detached-right-sticky-sidebar.html"--}}
                                   {{--data-i18n="nav.starter_kit.3_columns_detached.3_columns_detached_sticky_right_sidebar">Detached sticky right sidebar</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="navigation-divider"></li>--}}
                    {{--<li><a class="menu-item" href="../../../starter-kit/rtl/vertical-menu-template/layout-fixed-navbar.html"--}}
                           {{--data-i18n="nav.starter_kit.fixed_navbar">Fixed navbar</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="../../../starter-kit/rtl/vertical-menu-template/layout-fixed-navigation.html"--}}
                           {{--data-i18n="nav.starter_kit.fixed_navigation">Fixed navigation</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="../../../starter-kit/rtl/vertical-menu-template/layout-fixed-navbar-navigation.html"--}}
                           {{--data-i18n="nav.starter_kit.fixed_navbar_navigation">Fixed navbar &amp; navigation</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="../../../starter-kit/rtl/vertical-menu-template/layout-fixed-navbar-footer.html"--}}
                           {{--data-i18n="nav.starter_kit.fixed_navbar_footer">Fixed navbar &amp; footer</a>--}}
                    {{--</li>--}}
                    {{--<li class="navigation-divider"></li>--}}
                    {{--<li><a class="menu-item" href="../../../starter-kit/rtl/vertical-menu-template/layout-fixed.html"--}}
                           {{--data-i18n="nav.starter_kit.fixed_layout">Fixed layout</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="../../../starter-kit/rtl/vertical-menu-template/layout-boxed.html"--}}
                           {{--data-i18n="nav.starter_kit.boxed_layout">Boxed layout</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="../../../starter-kit/rtl/vertical-menu-template/layout-static.html"--}}
                           {{--data-i18n="nav.starter_kit.static_layout">Static layout</a>--}}
                    {{--</li>--}}
                    {{--<li class="navigation-divider"></li>--}}
                    {{--<li><a class="menu-item" href="../../../starter-kit/rtl/vertical-menu-template/layout-light.html"--}}
                           {{--data-i18n="nav.starter_kit.light_layout">Light layout</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="../../../starter-kit/rtl/vertical-menu-template/layout-dark.html"--}}
                           {{--data-i18n="nav.starter_kit.dark_layout">Dark layout</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="../../../starter-kit/rtl/vertical-menu-template/layout-semi-dark.html"--}}
                           {{--data-i18n="nav.starter_kit.semi_dark_layout">Semi dark layout</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="changelog.html"><i class="la la-copy"></i><span class="menu-title" data-i18n="nav.changelog.main">Changelog</span><span class="badge badge badge-pill badge-warning float-right">1.0</span></a>--}}
            {{--</li>--}}
            {{--<li class="disabled nav-item"><a href="#"><i class="la la-eye-slash"></i><span class="menu-title" data-i18n="nav.disabled_menu.main">Disabled Menu</span></a>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="la la-android"></i><span class="menu-title" data-i18n="nav.menu_levels.main">Menu levels</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a class="menu-item" href="#" data-i18n="nav.menu_levels.second_level">Second level</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="#" data-i18n="nav.menu_levels.second_level_child.main">Second level child</a>--}}
                        {{--<ul class="menu-content">--}}
                            {{--<li><a class="menu-item" href="#" data-i18n="nav.menu_levels.second_level_child.third_level">Third level</a>--}}
                            {{--</li>--}}
                            {{--<li><a class="menu-item" href="#" data-i18n="nav.menu_levels.second_level_child.third_level_child.main">Third level child</a>--}}
                                {{--<ul class="menu-content">--}}
                                    {{--<li><a class="menu-item" href="#" data-i18n="nav.menu_levels.second_level_child.third_level_child.fourth_level1">Fourth level</a>--}}
                                    {{--</li>--}}
                                    {{--<li><a class="menu-item" href="#" data-i18n="nav.menu_levels.second_level_child.third_level_child.fourth_level2">Fourth level</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" navigation-header">--}}
                {{--<span data-i18n="nav.category.pages">Pages</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"--}}
                                                                    {{--data-placement="right" data-original-title="Pages"></i>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="email-application.html"><i class="la la-envelope"></i><span class="menu-title" data-i18n="">Email Application</span></a>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="chat-application.html"><i class="la la-comments"></i><span class="menu-title" data-i18n="">Chat Application</span></a>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="la la-briefcase"></i><span class="menu-title" data-i18n="nav.project.main">Project</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a class="menu-item" href="project-summary.html" data-i18n="nav.project.project_summary">Project Summary</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="project-tasks.html" data-i18n="nav.project.project_tasks">Project Task</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="project-bugs.html" data-i18n="nav.project.project_bugs">Project Bugs</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="scrumboard.html"><i class="la la-check-square"></i><span class="menu-title" data-i18n="nav.scrumboard.main">Scrumboard</span><span class="badge badge badge-info float-right">Update</span></a>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="la la-clipboard"></i><span class="menu-title" data-i18n="nav.invoice.main">Invoice</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a class="menu-item" href="invoice-summary.html" data-i18n="nav.invoice.invoice_summary">Invoice Summary</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="invoice-template.html" data-i18n="nav.invoice.invoice_template">Invoice Template</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="invoice-list.html" data-i18n="nav.invoice.invoice_list">Invoice List</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="la la-film"></i><span class="menu-title" data-i18n="nav.timelines.main">Timelines</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a class="menu-item" href="timeline-center.html" data-i18n="nav.timelines.timeline_center">Timelines Center</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="timeline-left.html" data-i18n="nav.timelines.timeline_left">Timelines Left</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="timeline-right.html" data-i18n="nav.timelines.timeline_right">Timelines Right</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="timeline-horizontal.html" data-i18n="nav.timelines.timeline_horizontal">Timelines Horizontal</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="la la-user"></i><span class="menu-title" data-i18n="nav.users.main">Users</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a class="menu-item" href="user-profile.html" data-i18n="nav.users.user_profile">Users Profile</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="user-cards.html" data-i18n="nav.users.user_cards">Users Cards</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="users-contacts.html" data-i18n="nav.users.users_contacts">Users List</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="la la-image"></i><span class="menu-title" data-i18n="nav.gallery_pages.main">Gallery</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a class="menu-item" href="gallery-grid.html" data-i18n="nav.gallery_pages.gallery_grid">Gallery Grid</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="gallery-grid-with-desc.html" data-i18n="nav.gallery_pages.gallery_grid_with_desc">Gallery Grid with Desc</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="gallery-masonry.html" data-i18n="nav.gallery_pages.gallery_masonry">Masonry Gallery</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="gallery-masonry-with-desc.html" data-i18n="nav.gallery_pages.gallery_masonry_with_desc">Masonry Gallery with Desc</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="gallery-hover-effects.html" data-i18n="nav.gallery_pages.gallery_hover_effects">Hover Effects</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="la la-search"></i><span class="menu-title" data-i18n="nav.search_pages.main">Search</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a class="menu-item" href="search-page.html" data-i18n="nav.search_pages.search_page">Search Page</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="search-website.html" data-i18n="nav.search_pages.search_website">Search Website</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="search-images.html" data-i18n="nav.search_pages.search_images">Search Images</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="search-videos.html" data-i18n="nav.search_pages.search_videos">Search Videos</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="la la-unlock"></i><span class="menu-title" data-i18n="nav.login_register_pages.main">Authentication</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a class="menu-item" href="login-simple.html" data-i18n="nav.login_register_pages.login_simple">Login Simple</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="login-with-bg.html" data-i18n="nav.login_register_pages.login_with_bg">Login with Bg</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="login-with-bg-image.html" data-i18n="nav.login_register_pages.login_with_bg_image">Login with Bg Image</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="login-with-navbar.html" data-i18n="nav.login_register_pages.login_with_navbar">Login with Navbar</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="login-advanced.html" data-i18n="nav.login_register_pages.login_advanced">Login Advanced</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="register-simple.html" data-i18n="nav.login_register_pages.register_simple">Register Simple</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="register-with-bg.html" data-i18n="nav.login_register_pages.register_with_bg">Register with Bg</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="register-with-bg-image.html" data-i18n="nav.login_register_pages.register_with_bg_image">Register with Bg Image</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="register-with-navbar.html" data-i18n="nav.login_register_pages.register_with_navbar">Register with Navbar</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="register-advanced.html" data-i18n="nav.login_register_pages.register_advanced">Register Advanced</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="unlock-user.html" data-i18n="nav.login_register_pages.unlock_user">Unlock User</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="recover-password.html" data-i18n="nav.login_register_pages.recover_password">recover-password</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="la la-warning"></i><span class="menu-title" data-i18n="nav.error_pages.main">Error</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a class="menu-item" href="error-400.html" data-i18n="nav.error_pages.error_400">Error 400</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="error-400-with-navbar.html" data-i18n="nav.error_pages.error_400_with_navbar">Error 400 with Navbar</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="error-401.html" data-i18n="nav.error_pages.error_401">Error 401</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="error-401-with-navbar.html" data-i18n="nav.error_pages.error_401_with_navbar">Error 401 with Navbar</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="error-403.html" data-i18n="nav.error_pages.error_403">Error 403</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="error-403-with-navbar.html" data-i18n="nav.error_pages.error_403_with_navbar">Error 403 with Navbar</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="error-404.html" data-i18n="nav.error_pages.error_404">Error 404</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="error-404-with-navbar.html" data-i18n="nav.error_pages.error_404_with_navbar">Error 404 with Navbar</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="error-500.html" data-i18n="nav.error_pages.error_500">Error 500</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="error-500-with-navbar.html" data-i18n="nav.error_pages.error_500_with_navbar">Error 500 with Navbar</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="la la-file-text"></i><span class="menu-title" data-i18n="nav.other_pages.main">Others</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a class="menu-item" href="#" data-i18n="nav.other_pages.coming_soon.main">Coming Soon</a>--}}
                        {{--<ul class="menu-content">--}}
                            {{--<li><a class="menu-item" href="coming-soon-flat.html" data-i18n="nav.other_pages.coming_soon.coming_soon_flat">Flat</a>--}}
                            {{--</li>--}}
                            {{--<li><a class="menu-item" href="coming-soon-bg-image.html" data-i18n="nav.other_pages.coming_soon.coming_soon_bg_image">Bg image</a>--}}
                            {{--</li>--}}
                            {{--<li><a class="menu-item" href="coming-soon-bg-video.html" data-i18n="nav.other_pages.coming_soon.coming_soon_bg_video">Bg video</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="under-maintenance.html" data-i18n="nav.other_pages.under_maintenance">Maintenance</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" navigation-header">--}}
                {{--<span data-i18n="nav.category.ui">User Interface</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"--}}
                                                                          {{--data-placement="right" data-original-title="User Interface"></i>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="la la-tablet"></i><span class="menu-title" data-i18n="nav.cards.main">Cards</span><span class="badge badge badge-success float-right mr-2">New</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a class="menu-item" href="card-bootstrap.html" data-i18n="nav.cards.card_bootstrap">Bootstrap</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="card-headings.html" data-i18n="nav.cards.card_headings">Headings</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="card-options.html" data-i18n="nav.cards.card_options">Options</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="card-actions.html" data-i18n="nav.cards.card_actions">Action</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="card-draggable.html" data-i18n="nav.cards.card_draggable">Draggable</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="la la-fire"></i><span class="menu-title" data-i18n="nav.advance_cards.main">Advance Cards</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a class="menu-item" href="card-statistics.html" data-i18n="nav.cards.card_statistics">Statistics</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="card-weather.html" data-i18n="nav.cards.card_weather">Weather</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="card-charts.html" data-i18n="nav.cards.card_charts">Charts</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="card-interactive.html" data-i18n="nav.cards.card_interactive">Interactive</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="card-maps.html" data-i18n="nav.cards.card_maps">Maps</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="card-social.html" data-i18n="nav.cards.card_social">Social</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="card-ecommerce.html" data-i18n="nav.cards.card_ecommerce">E-Commerce</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="la la-compass"></i><span class="menu-title" data-i18n="nav.content.main">Content</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a class="menu-item" href="content-grid.html" data-i18n="nav.content.content_grid">Grid</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="content-typography.html" data-i18n="nav.content.content_typography">Typography</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="content-text-utilities.html" data-i18n="nav.content.content_text_utilities">Text utilities</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="content-syntax-highlighter.html" data-i18n="nav.content.content_syntax_highlighter">Syntax highlighter</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="content-helper-classes.html" data-i18n="nav.content.content_helper_classes">Helper classes</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="la la-server"></i><span class="menu-title" data-i18n="nav.components.main">Components</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a class="menu-item" href="component-alerts.html" data-i18n="nav.components.component_alerts">Alerts</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="component-callout.html" data-i18n="nav.components.component_callout">Callout</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="#" data-i18n="nav.components.components_buttons.main">Buttons</a>--}}
                        {{--<ul class="menu-content">--}}
                            {{--<li><a class="menu-item" href="component-buttons-basic.html" data-i18n="nav.components.components_buttons.component_buttons_basic">Basic Buttons</a>--}}
                            {{--</li>--}}
                            {{--<li><a class="menu-item" href="component-buttons-extended.html" data-i18n="nav.components.components_buttons.component_buttons_extended">Extended Buttons</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="component-carousel.html" data-i18n="nav.components.component_carousel">Carousel</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="component-collapse.html" data-i18n="nav.components.component_collapse">Collapse</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="component-dropdowns.html" data-i18n="nav.components.component_dropdowns">Dropdowns</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="component-list-group.html" data-i18n="nav.components.component_list_group">List Group</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="component-modals.html" data-i18n="nav.components.component_modals">Modals</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="component-pagination.html" data-i18n="nav.components.component_pagination">Pagination</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="component-navs-component.html" data-i18n="nav.components.component_navs_component">Navs Component</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="component-tabs-component.html" data-i18n="nav.components.component_tabs_component">Tabs Component</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="component-pills-component.html" data-i18n="nav.components.component_pills_component">Pills Component</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="component-tooltips.html" data-i18n="nav.components.component_tooltips">Tooltips</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="component-popovers.html" data-i18n="nav.components.component_popovers">Popovers</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="component-badges.html" data-i18n="nav.components.component_badges">Badges</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="component-pill-badges.html">Pill Badges</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="component-progress.html" data-i18n="nav.components.component_progress">Progress</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="component-media-objects.html" data-i18n="nav.components.component_media_objects">Media Objects</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="component-scrollable.html" data-i18n="nav.components.component_scrollable">Scrollable</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="component-spinners.html" data-i18n="nav.components.component_spinners">Spinners</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="la la-diamond"></i><span class="menu-title" data-i18n="nav.extra_components.main">Extra Components</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a class="menu-item" href="ex-component-sweet-alerts.html" data-i18n="nav.extra_components.ex_component_sweet_alerts">Sweet Alerts</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="ex-component-tree-views.html" data-i18n="nav.extra_components.ex_component_tree_views">Tree Views</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="ex-component-toastr.html" data-i18n="nav.extra_components.ex_component_toastr">Toastr</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="ex-component-ratings.html" data-i18n="nav.extra_components.ex_component_ratings">Ratings</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="ex-component-noui-slider.html" data-i18n="nav.extra_components.ex_component_noui_slider">NoUI Slider</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="ex-component-date-time-dropper.html" data-i18n="nav.extra_components.ex_component_date_time_dropper">Date Time Dropper</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="ex-component-lists.html" data-i18n="nav.extra_components.ex_component_lists">Lists</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="ex-component-toolbar.html" data-i18n="nav.extra_components.ex_component_toolbar">Toolbar</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="ex-component-knob.html" data-i18n="nav.extra_components.ex_component_knob">Knob</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="ex-component-long-press.html" data-i18n="nav.extra_components.ex_component_long_press">Long Press</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="ex-component-offline.html" data-i18n="nav.extra_components.ex_component_offline">Offline</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="ex-component-zoom.html" data-i18n="nav.extra_components.ex_component_zoom">Zoom</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="la la-eye"></i><span class="menu-title" data-i18n="nav.icons.main">Icons</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a class="menu-item" href="icons-feather.html" data-i18n="nav.icons.icons_feather">Feather</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="icons-line-awesome.html" data-i18n="nav.icons.icons_line_awesome">Line Awesome</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="icons-meteocons.html" data-i18n="nav.icons.icons_meteocons">Meteocons</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="icons-simple-line-icons.html" data-i18n="nav.icons.icons_linecons">Simple Line Icons</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="animation.html"><i class="la la-spinner spinner"></i><span class="menu-title" data-i18n="nav.animation.main">Animation</span></a>--}}
            {{--</li>--}}
            {{--<li class=" navigation-header">--}}
                {{--<span data-i18n="nav.category.forms">Forms</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"--}}
                                                                    {{--data-placement="right" data-original-title="Forms"></i>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="la la-terminal"></i><span class="menu-title" data-i18n="nav.form_elements.main">Form Elements</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a class="menu-item" href="form-inputs.html" data-i18n="nav.form_elements.form_inputs">Form Inputs</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="form-input-groups.html" data-i18n="nav.form_elements.form_input_groups">Input Groups</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="form-input-grid.html" data-i18n="nav.form_elements.form_input_grid">Input Grid</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="form-extended-inputs.html" data-i18n="nav.form_elements.form_extended_inputs">Extended Inputs</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="form-checkboxes-radios.html" data-i18n="nav.form_elements.form_checkboxes_radios">Checkboxes &amp; Radios</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="form-switch.html" data-i18n="nav.form_elements.form_switch">Switch</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="#" data-i18n="nav.form_elements.form_select.main">Select</a>--}}
                        {{--<ul class="menu-content">--}}
                            {{--<li><a class="menu-item" href="form-select2.html" data-i18n="nav.form_elements.form_select.form_select2">Select2</a>--}}
                            {{--</li>--}}
                            {{--<li><a class="menu-item" href="form-selectize.html" data-i18n="nav.form_elements.form_select.form_selectize">Selectize</a>--}}
                            {{--</li>--}}
                            {{--<li><a class="menu-item" href="form-selectivity.html" data-i18n="nav.form_elements.form_select.form_selectivity">Selectivity</a>--}}
                            {{--</li>--}}
                            {{--<li><a class="menu-item" href="form-select-box-it.html" data-i18n="nav.form_elements.form_select.form_select_box_it">Select Box It</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="form-dual-listbox.html" data-i18n="nav.form_elements.form_dual_listbox">Dual Listbox</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="form-tags-input.html" data-i18n="nav.form_elements.form_tags_input">Tags Input</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="form-validation.html" data-i18n="nav.form_elements.form_validation">Validation</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="la la-file-text"></i><span class="menu-title" data-i18n="nav.form_layouts.main">Form Layouts</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a class="menu-item" href="form-layout-basic.html" data-i18n="nav.form_layouts.form_layout_basic">Basic Forms</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="form-layout-horizontal.html" data-i18n="nav.form_layouts.form_layout_horizontal">Horizontal Forms</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="form-layout-hidden-labels.html" data-i18n="nav.form_layouts.form_layout_hidden_labels">Hidden Labels</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="form-layout-form-actions.html" data-i18n="nav.form_layouts.form_layout_form_actions">Form Actions</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="form-layout-row-separator.html" data-i18n="nav.form_layouts.form_layout_row_separator">Row Separator</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="form-layout-bordered.html" data-i18n="nav.form_layouts.form_layout_bordered">Bordered</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="form-layout-striped-rows.html" data-i18n="nav.form_layouts.form_layout_striped_rows">Striped Rows</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="form-layout-striped-labels.html" data-i18n="nav.form_layouts.form_layout_striped_labels">Striped Labels</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="la la-paste"></i><span class="menu-title" data-i18n="nav.form_wizard.main">Form Wizard</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a class="menu-item" href="form-wizard-circle-style.html" data-i18n="nav.form_wizard.form_wizard_circle_style">Circle Style</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="form-wizard-notification-style.html" data-i18n="nav.form_wizard.form_wizard_notification_style">Notification Style</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="form-repeater.html"><i class="la la-repeat"></i><span class="menu-title" data-i18n="nav.form_repeater.main">Form Repeater</span></a>--}}
            {{--</li>--}}
            {{--<li class=" navigation-header">--}}
                {{--<span data-i18n="nav.category.tables">Tables</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"--}}
                                                                      {{--data-placement="right" data-original-title="Tables"></i>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="la la-table"></i><span class="menu-title" data-i18n="nav.bootstrap_tables.main">Bootstrap Tables</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a class="menu-item" href="table-basic.html" data-i18n="nav.bootstrap_tables.table_basic">Basic Tables</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="table-border.html" data-i18n="nav.bootstrap_tables.table_border">Table Border</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="table-sizing.html" data-i18n="nav.bootstrap_tables.table_sizing">Table Sizing</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="table-styling.html" data-i18n="nav.bootstrap_tables.table_styling">Table Styling</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="table-components.html" data-i18n="nav.bootstrap_tables.table_components">Table Components</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="la la-th"></i><span class="menu-title" data-i18n="nav.data_tables.main">DataTables</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a class="menu-item" href="dt-basic-initialization.html" data-i18n="nav.data_tables.dt_basic_initialization">Basic Initialisation</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="dt-advanced-initialization.html" data-i18n="nav.data_tables.dt_advanced_initialization">Advanced initialisation</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="dt-styling.html" data-i18n="nav.data_tables.dt_styling">Styling</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="dt-data-sources.html" data-i18n="nav.data_tables.dt_data_sources">Data Sources</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="dt-api.html" data-i18n="nav.data_tables.dt_api">API</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="la la-th-large"></i><span class="menu-title" data-i18n="nav.datatable_extensions.main">DataTables Ext.</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a class="menu-item" href="dt-extensions-autofill.html" data-i18n="nav.datatable_extensions.dt_extensions_autofill">AutoFill</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="#" data-i18n="nav.datatable_extensions.datatable_buttons.main">Buttons</a>--}}
                        {{--<ul class="menu-content">--}}
                            {{--<li><a class="menu-item" href="dt-extensions-buttons-basic.html" data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_basic">Basic Buttons</a>--}}
                            {{--</li>--}}
                            {{--<li><a class="menu-item" href="dt-extensions-buttons-html-5-data-export.html"--}}
                                   {{--data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_html_5_data_export">HTML 5 Data Export</a>--}}
                            {{--</li>--}}
                            {{--<li><a class="menu-item" href="dt-extensions-buttons-flash-data-export.html"--}}
                                   {{--data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_flash_data_export">Flash Data Export</a>--}}
                            {{--</li>--}}
                            {{--<li><a class="menu-item" href="dt-extensions-buttons-column-visibility.html"--}}
                                   {{--data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_column_visibility">Column Visibility</a>--}}
                            {{--</li>--}}
                            {{--<li><a class="menu-item" href="dt-extensions-buttons-print.html" data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_print">Print</a>--}}
                            {{--</li>--}}
                            {{--<li><a class="menu-item" href="dt-extensions-buttons-api.html" data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_api">API</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="dt-extensions-column-reorder.html" data-i18n="nav.datatable_extensions.dt_extensions_column_reorder">Column Reorder</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="dt-extensions-fixed-columns.html" data-i18n="nav.datatable_extensions.dt_extensions_fixed_columns">Fixed Columns</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="dt-extensions-key-table.html" data-i18n="nav.datatable_extensions.dt_extensions_key_table">Key Table</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="dt-extensions-row-reorder.html" data-i18n="nav.datatable_extensions.dt_extensions_row_reorder">Row Reorder</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="dt-extensions-select.html" data-i18n="nav.datatable_extensions.dt_extensions_select">Select</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="dt-extensions-fix-header.html" data-i18n="nav.datatable_extensions.dt_extensions_fix_header">Fix Header</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="dt-extensions-responsive.html" data-i18n="nav.datatable_extensions.dt_extensions_responsive">Responsive</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="dt-extensions-column-visibility.html" data-i18n="nav.datatable_extensions.dt_extensions_column_visibility">Column Visibility</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="la la-th-list"></i><span class="menu-title" data-i18n="nav.handson_table.main">Handson Table</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a class="menu-item" href="handson-table-appearance.html" data-i18n="nav.handson_table.handson_table_appearance">Appearance</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="handson-table-rows-columns.html" data-i18n="nav.handson_table.handson_table_rows_columns">Rows Columns</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="handson-table-rows-only.html" data-i18n="nav.handson_table.handson_table_rows_only">Rows Only</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="handson-table-columns-only.html" data-i18n="nav.handson_table.handson_table_columns_only">Columns Only</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="handson-table-data-operations.html" data-i18n="nav.handson_table.handson_table_data_operations">Data Operations</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="handson-table-cell-features.html" data-i18n="nav.handson_table.handson_table_cell_features">Cell Features</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="handson-table-cell-types.html" data-i18n="nav.handson_table.handson_table_cell_types">Cell Types</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="handson-table-integrations.html" data-i18n="nav.handson_table.handson_table_integrations">Integrations</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="handson-table-utilities.html" data-i18n="nav.handson_table.handson_table_utilities">Utilities</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="table-jsgrid.html"><i class="la la-table"></i><span class="menu-title" data-i18n="nav.table_jsgrid.main">jsGrid</span></a>--}}
            {{--</li>--}}
            {{--<li class=" navigation-header">--}}
                {{--<span data-i18n="nav.category.addons">Add Ons</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"--}}
                                                                       {{--data-placement="right" data-original-title="Add Ons"></i>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="la la-edit"></i><span class="menu-title" data-i18n="nav.editors.main">Editors</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a class="menu-item" href="editor-quill.html" data-i18n="nav.editors.editor_quill">Quill</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="editor-ckeditor.html" data-i18n="nav.editors.editor_ckeditor">CKEditor</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="editor-summernote.html" data-i18n="nav.editors.editor_summernote">Summernote</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="editor-tinymce.html" data-i18n="nav.editors.editor_tinymce">TinyMCE</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="#" data-i18n="nav.editors.code_editor_codemirror.main">Code Editor</a>--}}
                        {{--<ul class="menu-content">--}}
                            {{--<li><a class="menu-item" href="code-editor-codemirror.html" data-i18n="nav.editors.code_editor_codemirror.code_editor_codemirror">CodeMirror</a>--}}
                            {{--</li>--}}
                            {{--<li><a class="menu-item" href="code-editor-ace.html" data-i18n="nav.editors.code_editor_codemirror.code_editor_ace">Ace</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="la la-calendar"></i><span class="menu-title" data-i18n="nav.pickers.main">Pickers</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a class="menu-item" href="pickers-date-&amp;-time-picker.html" data-i18n="nav.pickers.pickers_date_time_picker">Date &amp; Time Picker</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="pickers-color-picker.html" data-i18n="nav.pickers.pickers_color_picker">Color Picker</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="la la-code-fork"></i><span class="menu-title" data-i18n="nav.jquery_ui.main">jQuery UI</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a class="menu-item" href="jquery-ui-interactions.html" data-i18n="nav.jquery_ui.jquery_ui_interactions">Interactions</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="jquery-ui-navigations.html" data-i18n="nav.jquery_ui.jquery_ui_navigations">Navigations</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="jquery-ui-date-pickers.html" data-i18n="nav.jquery_ui.jquery_ui_date_pickers">Date Pickers</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="jquery-ui-autocomplete.html" data-i18n="nav.jquery_ui.jquery_ui_autocomplete">Autocomplete</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="jquery-ui-buttons-select.html" data-i18n="nav.jquery_ui.jquery_ui_buttons_select">Buttons &amp; Select</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="jquery-ui-slider-spinner.html" data-i18n="nav.jquery_ui.jquery_ui_slider_spinner">Slider &amp; Spinner</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="jquery-ui-dialog-tooltip.html" data-i18n="nav.jquery_ui.jquery_ui_dialog_tooltip">Dialog &amp; Tooltip</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="add-on-block-ui.html"><i class="la la-terminal"></i><span class="menu-title" data-i18n="nav.add_on_block_ui.main">Block UI</span></a>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="add-on-image-cropper.html"><i class="la la-crop"></i><span class="menu-title" data-i18n="nav.add_on_image_cropper.main">Image Cropper</span></a>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="add-on-drag-drop.html"><i class="la la-mouse-pointer"></i><span class="menu-title" data-i18n="nav.add_on_drag_drop.main">Drag &amp; Drop</span></a>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="la la-cloud-upload"></i><span class="menu-title" data-i18n="nav.file_uploaders.main">File Uploader</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a class="menu-item" href="file-uploader-dropzone.html" data-i18n="nav.file_uploaders.file_uploader_dropzone">Dropzone</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="la la-calendar"></i><span class="menu-title" data-i18n="nav.event_calendars.main">Event Calendars</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a class="menu-item" href="#" data-i18n="nav.event_calendars.full_calender.main">Full Calendar</a>--}}
                        {{--<ul class="menu-content">--}}
                            {{--<li><a class="menu-item" href="full-calender-basic.html" data-i18n="nav.event_calendars.full_calender.full_calender_basic">Basic</a>--}}
                            {{--</li>--}}
                            {{--<li><a class="menu-item" href="full-calender-events.html" data-i18n="nav.event_calendars.full_calender.full_calender_events">Events</a>--}}
                            {{--</li>--}}
                            {{--<li><a class="menu-item" href="full-calender-advance.html" data-i18n="nav.event_calendars.full_calender.full_calender_advance">Advance</a>--}}
                            {{--</li>--}}
                            {{--<li><a class="menu-item" href="full-calender-extra.html" data-i18n="nav.event_calendars.full_calender.full_calender_extra">Extra</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="calendars-clndr.html" data-i18n="nav.event_calendars.calendars_clndr">CLNDR</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="la la-flag-o"></i><span class="menu-title" data-i18n="nav.internationalization.main">Internationalization</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a class="menu-item" href="i18n-resources.html" data-i18n="nav.internationalization.i18n_resources">Resources</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="i18n-xhr-backend.html" data-i18n="nav.internationalization.i18n_xhr_backend">XHR Backend</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="i18n-query-string.html?lng=en" data-i18n="nav.internationalization.i18n_query_string">Query String</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="i18n-on-init.html" data-i18n="nav.internationalization.i18n_on_init">On Init</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="i18n-after-init.html" data-i18n="nav.internationalization.i18n_after_init">After Init</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="i18n-fallback.html" data-i18n="nav.internationalization.i18n_fallback">Fallback</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" navigation-header">--}}
                {{--<span data-i18n="nav.category.charts_maps">Charts &amp; Maps</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"--}}
                                                                                      {{--data-placement="right" data-original-title="Charts &amp; Maps"></i>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="la la-bar-chart"></i><span class="menu-title" data-i18n="nav.google_charts.main">google Charts</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a class="menu-item" href="google-bar-charts.html" data-i18n="nav.google_charts.google_bar_charts">Bar charts</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="google-line-charts.html" data-i18n="nav.google_charts.google_line_charts">Line charts</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="google-pie-charts.html" data-i18n="nav.google_charts.google_pie_charts">Pie charts</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="google-scatter-charts.html" data-i18n="nav.google_charts.google_scatter_charts">Scatter charts</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="google-bubble-charts.html" data-i18n="nav.google_charts.google_bubble_charts">Bubble charts</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="google-other-charts.html" data-i18n="nav.google_charts.google_other_charts">Other charts</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="la la-file-photo-o"></i><span class="menu-title" data-i18n="nav.echarts.main">Echarts</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a class="menu-item" href="echarts-line-area-charts.html" data-i18n="nav.echarts.echarts_line_area_charts">Line &amp; Area charts</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="echarts-bar-column-charts.html" data-i18n="nav.echarts.echarts_bar_column_charts">Bar &amp; Column charts</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="echarts-pie-doughnut-charts.html" data-i18n="nav.echarts.echarts_pie_doughnut_charts">Pie &amp; Doughnut charts</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="echarts-scatter-charts.html" data-i18n="nav.echarts.echarts_scatter_charts">Scatter charts</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="echarts-radar-chord-charts.html" data-i18n="nav.echarts.echarts_radar_chord_charts">Radar &amp; Chord charts</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="echarts-funnel-gauges-charts.html" data-i18n="nav.echarts.echarts_funnel_gauges_charts">Funnel &amp; Gauges charts</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="echarts-combination-charts.html" data-i18n="nav.echarts.echarts_combination_charts">Combination charts</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="echarts-advance-charts.html" data-i18n="nav.echarts.echarts_advance_charts">Advance charts</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="la la-area-chart"></i><span class="menu-title" data-i18n="nav.chartjs.main">Chartjs</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a class="menu-item" href="chartjs-line-charts.html" data-i18n="nav.chartjs.chartjs_line_charts">Line charts</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="chartjs-bar-charts.html" data-i18n="nav.chartjs.chartjs_bar_charts">Bar charts</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="chartjs-pie-doughnut-charts.html" data-i18n="nav.chartjs.chartjs_pie_doughnut_charts">Pie &amp; Doughnut charts</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="chartjs-scatter-charts.html" data-i18n="nav.chartjs.chartjs_scatter_charts">Scatter charts</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="chartjs-polar-radar-charts.html" data-i18n="nav.chartjs.chartjs_polar_radar_charts">Polar &amp; Radar charts</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="chartjs-advance-charts.html" data-i18n="nav.chartjs.chartjs_advance_charts">Advance charts</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="la la-line-chart"></i><span class="menu-title" data-i18n="nav.d3_charts.main">D3 Charts</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a class="menu-item" href="d3-line-chart.html" data-i18n="nav.d3_charts.d3_line_chart">Line Chart</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="d3-bar-chart.html" data-i18n="nav.d3_charts.d3_bar_chart">Bar Chart</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="d3-pie-chart.html" data-i18n="nav.d3_charts.d3_pie_chart">Pie Chart</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="d3-circle-diagrams.html" data-i18n="nav.d3_charts.d3_circle_diagrams">Circle Diagrams</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="d3-tree-chart.html" data-i18n="nav.d3_charts.d3_tree_chart">Tree Chart</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="d3-other-charts.html" data-i18n="nav.d3_charts.d3_other_charts">Other Charts</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="la la-indent"></i><span class="menu-title" data-i18n="nav.c3_charts.main">C3 Charts</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a class="menu-item" href="c3-line-chart.html" data-i18n="nav.c3_charts.c3_line_chart">Line Chart</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="c3-bar-pie-chart.html" data-i18n="nav.c3_charts.c3_bar_pie_chart">Bar &amp; Pie Chart</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="c3-axis-chart.html" data-i18n="nav.c3_charts.c3_axis_chart">Axis Chart</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="c3-data-chart.html" data-i18n="nav.c3_charts.c3_data_chart">Data Chart</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="c3-grid-chart.html" data-i18n="nav.c3_charts.c3_grid_chart">Grid Chart</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="c3-transform-chart.html" data-i18n="nav.c3_charts.c3_transform_chart">Transform Chart</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="c3-other-charts.html" data-i18n="nav.c3_charts.c3_other_charts">Other Charts</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="la la-pie-chart"></i><span class="menu-title" data-i18n="nav.chartist.main">Chartist</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a class="menu-item" href="chartist-line-charts.html" data-i18n="nav.chartist.chartist_line_charts">Line charts</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="chartist-bar-charts.html" data-i18n="nav.chartist.chartist_bar_charts">Bar charts</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="chartist-pie-charts.html" data-i18n="nav.chartist.chartist_pie_charts">Pie charts</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="morris-charts.html"><i class="la la-share-alt"></i><span class="menu-title" data-i18n="nav.morris_charts.main">Morris Charts</span></a>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="la la-bolt"></i><span class="menu-title" data-i18n="nav.flot_charts.main">Flot Charts</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a class="menu-item" href="flot-line-charts.html" data-i18n="nav.flot_charts.flot_line_charts">Line charts</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="flot-bar-charts.html" data-i18n="nav.flot_charts.flot_bar_charts">Bar charts</a>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="flot-pie-charts.html" data-i18n="nav.flot_charts.flot_pie_charts">Pie charts</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="rickshaw-charts.html"><i class="la la-bullseye"></i><span class="menu-title" data-i18n="nav.rickshaw_charts.main">Rickshaw Charts</span></a>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="la la-map"></i><span class="menu-title" data-i18n="nav.maps.main">Maps</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a class="menu-item" href="#" data-i18n="nav.maps.google_maps.main">google Maps</a>--}}
                        {{--<ul class="menu-content">--}}
                            {{--<li><a class="menu-item" href="gmaps-basic-maps.html" data-i18n="nav.maps.google_maps.gmaps_basic_maps">Maps</a>--}}
                            {{--</li>--}}
                            {{--<li><a class="menu-item" href="gmaps-services.html" data-i18n="nav.maps.google_maps.gmaps_services">Services</a>--}}
                            {{--</li>--}}
                            {{--<li><a class="menu-item" href="gmaps-overlays.html" data-i18n="nav.maps.google_maps.gmaps_overlays">Overlays</a>--}}
                            {{--</li>--}}
                            {{--<li><a class="menu-item" href="gmaps-routes.html" data-i18n="nav.maps.google_maps.gmaps_routes">Routes</a>--}}
                            {{--</li>--}}
                            {{--<li><a class="menu-item" href="gmaps-utils.html" data-i18n="nav.maps.google_maps.gmaps_utils">Utils</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li><a class="menu-item" href="#" data-i18n="nav.maps.vector_maps.main">Vector Maps</a>--}}
                        {{--<ul class="menu-content">--}}
                            {{--<li><a class="menu-item" href="#" data-i18n="nav.maps.vector_maps.jquery_mapael.main">jQuery Mapael</a>--}}
                                {{--<ul class="menu-content">--}}
                                    {{--<li><a class="menu-item" href="vector-maps-mapael-basic.html" data-i18n="nav.maps.vector_maps.jquery_mapael.vector_maps_mapael_basic">Basic Maps</a>--}}
                                    {{--</li>--}}
                                    {{--<li><a class="menu-item" href="vector-maps-mapael-advance.html" data-i18n="nav.maps.vector_maps.jquery_mapael.vector_maps_mapael_advance">Advance Maps</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a class="menu-item" href="vector-maps-jvector.html" data-i18n="nav.maps.vector_maps.jvector_maps">jVector Map</a>--}}
                            {{--</li>--}}
                            {{--<li><a class="menu-item" href="vector-maps-jvq.html" data-i18n="nav.maps.vector_maps.vector_maps_jvq">JQV Map</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" navigation-header">--}}
                {{--<span data-i18n="nav.category.support">Support</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"--}}
                                                                        {{--data-placement="right" data-original-title="Support"></i>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="http://support.pixinvent.com/"><i class="la la-support"></i><span class="menu-title" data-i18n="nav.support_raise_support.main">Raise Support</span></a>--}}
            {{--</li>--}}
            {{--<li class=" nav-item">--}}
                {{--<a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/documentation"><i class="la la-text-height"></i>--}}
                    {{--<span class="menu-title" data-i18n="nav.support_documentation.main">Documentation</span>--}}
                {{--</a>--}}
            {{--</li>--}}
        {{--</ul>--}}
    {{--</div>--}}
{{--</div>--}}
