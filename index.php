<?php
$page_title = 'EconInsight Consultancy - Economic Insights & Strategic Analysis';
$page_description = 'EconInsight Consultancy provides comprehensive economic research, market analysis, social impact assessment, and financial analytics. Transform complex data into actionable insights for informed decision-making.';
$page_keywords = 'economic research, market analysis, social impact, financial analytics, data insights, strategic consulting, policy research, business intelligence';
$og_title = 'EconInsight Consultancy - Data-Driven Economic Insights';
$og_description = 'Transform complex economic challenges into clear, actionable insights with our comprehensive research and analysis services.';
$twitter_title = 'EconInsight Consultancy - Data-Driven Economic Insights';
$twitter_description = 'Transform complex economic challenges into clear, actionable insights with our comprehensive research and analysis services.';
include 'header.php';
?>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-bg-pattern"></div>
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1 class="hero-title">WE SIMPLIFY COMPLEXITY</h1>
                    <a href="contact" class="cta-button">Get in Touch</a>
                </div>
                <div class="hero-graphic">
                    <img src="assets/img/side-view-businesswoman-showing-analytical-charts-her-male-coworker.jpg" alt="EconInsight Professional Services" class="hero-image">
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" class="about">
        <div class="container">
            <div class="about-content">
                <div class="about-graphic">
                    <img src="assets/img/office-scene-close-up.jpg" alt="EconInsight Team and Services" class="about-image">
                </div>
                <div class="about-text">
                    <h2 class="section-title text-center">About Us</h2>
                    <p class="about-description">
                        EconInsight is a research consultancy that specializes in simplifying complex economic and social challenges. We empower organizations with data-driven insights and strategic frameworks to make informed decisions in an ever-evolving landscape.
                    </p>
                </div>
                
            </div>
            <div class="background-pattern"></div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container">
            <h2 class="section-title text-center">Our Services</h2>
            
            <!-- Services Carousel -->
            <div id="servicesCarousel" class="carousel slide" data-bs-ride="carousel">
                <!-- Carousel Indicators -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#servicesCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#servicesCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#servicesCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#servicesCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                
                <!-- Carousel Items -->
                <div class="carousel-inner">
                    <!-- Slide 1: Economic Research + Market Analysis (Desktop) -->
                    <div class="carousel-item active">
                        <div class="services-pair">
                            <div class="service-card">
                                <div class="service-icon">
                                    <img src="assets/img/data-visualization.svg" alt="Economic Research" class="service-image">
                                </div>
                                <h3 class="service-title">Economic & Policy Research</h3>
                                <p class="service-description">Comprehensive economic research and policy analysis to drive informed decision-making.</p>
                                <a href="economic-research" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                            </div>
                            
                            <div class="service-card desktop-only">
                                <div class="service-icon">
                                    <img src="assets/img/pie-chart.svg" alt="Market Analysis" class="service-image">
                                </div>
                                <h3 class="service-title">Market Analysis</h3>
                                <p class="service-description">In-depth market research and competitive analysis for strategic business decisions.</p>
                                <a href="market-analysis" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Slide 2: Social Impact Analysis -->
                    <div class="carousel-item">
                        <div class="services-pair">
                            <div class="service-card">
                                <div class="service-icon">
                                    <img src="assets/img/people-network.svg" alt="Social Impact" class="service-image">
                                </div>
                                <h3 class="service-title">Social Impact Analysis</h3>
                                <p class="service-description">Measure and optimize the social impact of your programs and initiatives.</p>
                                <a href="social-impact" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Slide 3: Financial Analytics -->
                    <div class="carousel-item">
                        <div class="services-pair">
                            <div class="service-card">
                                <div class="service-icon">
                                    <img src="assets/img/trend-line.svg" alt="Financial Analytics" class="service-image">
                                </div>
                                <h3 class="service-title">Financial Analytics & Business Planning</h3>
                                <p class="service-description">Transform financial data into strategic insights for sustainable growth.</p>
                                <a href="financial-analytics" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Slide 4: Market Analysis -->
                    <div class="carousel-item">
                        <div class="services-pair">
                            <div class="service-card">
                                <div class="service-icon">
                                    <img src="assets/img/pie-chart.svg" alt="Market Analysis" class="service-image">
                                </div>
                                <h3 class="service-title">Market Analysis</h3>
                                <p class="service-description">In-depth market research and competitive analysis for strategic business decisions.</p>
                                <a href="market-analysis" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Carousel Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#servicesCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#servicesCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Approach Section -->
    <section id="approach" class="approach">
        <div class="container">
            <h2 class="section-title text-center">Our Approach</h2>
            <p class="approach-description">
                We combine structured, evidence-based methodologies with strategic frameworks to deliver actionable insights. Our approach is rooted in rigorous analysis and practical application, ensuring that our recommendations drive real-world impact.
            </p>
        </div>
    </section>

    <!-- Insights Section -->
    <section class="insights">
        <div class="container">
            <h2 class="section-title text-center">Insights</h2>
            <div class="insights-content">
                <div class="insights-image">
                    <img src="assets/img/office-scene-close-up.jpg" alt="EconInsight Team Working on Insights" class="insights-img">
                </div>
                <div class="insights-cards">
                    <div class="insight-card">
                        <div class="insight-icon">
                            <div class="hexagon-group-small">
                                <div class="hexagon-small hexagon-orange"></div>
                                <div class="hexagon-small hexagon-orange"></div>
                                <div class="hexagon-small hexagon-orange"></div>
                                <div class="hexagon-small hexagon-orange"></div>
                            </div>
                        </div>
                        <h3 class="insight-title">Understanding Shifting Markets</h3>
                        <p class="insight-description">
                            Navigate market volatility with data-driven insights and predictive analytics.
                        </p>
                    </div>
                    <div class="insight-card">
                        <div class="insight-icon">
                            <div class="insight-icon-combined">
                                <i class="fas fa-user-plus"></i>
                                <div class="hexagon-group-small">
                                    <div class="hexagon-small hexagon-orange"></div>
                                    <div class="hexagon-small hexagon-orange"></div>
                                    <div class="hexagon-small hexagon-orange"></div>
                                </div>
                            </div>
                        </div>
                        <h3 class="insight-title">Assessing Social Impact of Programs</h3>
                        <p class="insight-description">
                            Measure and optimize the effectiveness of social initiatives and programs.
                        </p>
                    </div>
                    <div class="insight-card">
                        <div class="insight-icon">
                            <div class="hexagon-group-small">
                                <div class="hexagon-small hexagon-orange"></div>
                                <div class="hexagon-small hexagon-orange"></div>
                                <div class="hexagon-small hexagon-orange"></div>
                                <div class="hexagon-small hexagon-orange"></div>
                                <div class="hexagon-small hexagon-orange"></div>
                            </div>
                        </div>
                        <h3 class="insight-title">Economic Trends & Policy Implications</h3>
                        <p class="insight-description">
                            Analyze economic patterns and their implications for policy development.
                        </p>
                    </div>
                    <div class="insight-card">
                        <div class="insight-icon">
                            <div class="hexagon-group-small">
                                <div class="hexagon-small hexagon-outline"></div>
                                <div class="hexagon-small hexagon-orange"></div>
                                <div class="hexagon-small hexagon-orange"></div>
                            </div>
                        </div>
                        <h3 class="insight-title">The Role of Data in Business Strategy</h3>
                        <p class="insight-description">
                            Leverage data analytics to inform strategic business decisions and growth.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="why-choose-section">
        <div class="container">
            <h2 class="section-title text-center">Why Choose Us</h2>
            <div class="why-choose-grid">
                <div class="why-choose-card">
                    <div class="why-choose-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Data-Driven Insights</h3>
                    <p>We leverage advanced analytics and comprehensive data to provide actionable insights that drive informed decision-making.</p>
                </div>
                <div class="why-choose-card">
                    <div class="why-choose-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Expert Team</h3>
                    <p>Our team of experienced economists, analysts, and consultants bring diverse expertise across multiple industries and sectors.</p>
                </div>
                <div class="why-choose-card">
                    <div class="why-choose-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3>Innovative Solutions</h3>
                    <p>We develop creative and innovative approaches to complex economic and social challenges, delivering unique solutions.</p>
                </div>
                <div class="why-choose-card">
                    <div class="why-choose-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Timely Delivery</h3>
                    <p>We understand the importance of deadlines and ensure timely delivery of high-quality research and analysis.</p>
                </div>
                <div class="why-choose-card">
                    <div class="why-choose-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Client Partnership</h3>
                    <p>We work closely with our clients as strategic partners, ensuring alignment with their goals and objectives.</p>
                </div>
                <div class="why-choose-card">
                    <div class="why-choose-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3>Proven Results</h3>
                    <p>Our track record speaks for itself with successful projects across various industries and measurable outcomes.</p>
                </div>
            </div>
        </div>
    </section>
<?php
include "footer.php";
?>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
