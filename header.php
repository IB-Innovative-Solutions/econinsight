<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'EconInsight Consultancy - Economic Insights & Strategic Analysis'; ?></title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="<?php echo isset($page_description) ? $page_description : 'EconInsight Consultancy provides comprehensive economic research, market analysis, social impact assessment, and financial analytics. Transform complex data into actionable insights for informed decision-making.'; ?>">
    <meta name="keywords" content="<?php echo isset($page_keywords) ? $page_keywords : 'economic research, market analysis, social impact, financial analytics, data insights, strategic consulting, policy research, business intelligence'; ?>">
    <meta name="author" content="EconInsight Consultancy">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo isset($og_title) ? $og_title : 'EconInsight Consultancy - Data-Driven Economic Insights'; ?>">
    <meta property="og:description" content="<?php echo isset($og_description) ? $og_description : 'Transform complex economic challenges into clear, actionable insights with our comprehensive research and analysis services.'; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://econinsight.com">
    <meta property="og:image" content="assets/img/econinsight_logo.png">
    <meta property="og:site_name" content="EconInsight Consultancy">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo isset($twitter_title) ? $twitter_title : 'EconInsight Consultancy - Data-Driven Economic Insights'; ?>">
    <meta name="twitter:description" content="<?php echo isset($twitter_description) ? $twitter_description : 'Transform complex economic challenges into clear, actionable insights with our comprehensive research and analysis services.'; ?>">
    <meta name="twitter:image" content="assets/img/econinsight_logo.png">
    
    <!-- Additional SEO Meta Tags -->
    <meta name="language" content="English">
    <meta name="revisit-after" content="7 days">
    <meta name="distribution" content="global">
    <meta name="rating" content="general">
    <meta name="theme-color" content="#ff6b35">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="https://econinsight.co.za">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/img/econinsight_logo.png">
    <link rel="shortcut icon" type="image/png" href="assets/img/econinsight_logo.png">
    <link rel="apple-touch-icon" href="assets/img/econinsight_logo.png">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <img src="assets/img/econinsight_logo.png" alt="EconInsight Logo" class="logo-image">
      incr          </div>
                <div class="header-actions">
                    <nav class="nav">
                        <ul class="nav-list">
                            <li><a href="index.php#about">About</a></li>
                            <li class="dropdown">
                                <a href="services.php" class="dropdown-toggle">Services</a>
                                <ul class="dropdown-menu">
                                    <li><a href="economic-research.php">Economic Research</a></li>
                                    <li><a href="market-analysis.php">Market Analysis</a></li>
                                    <li><a href="social-impact.php">Social Impact</a></li>
                                    <li><a href="financial-analytics.php">Financial Analytics</a></li>
                                </ul>
                            </li>
                            <li><a href="index.php#approach">Approach</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </nav>
                    <div class="search-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <div class="mobile-menu-toggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
