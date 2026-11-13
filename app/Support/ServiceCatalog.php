<?php

namespace App\Support;

class ServiceCatalog
{
    /**
     * Service detail pages keyed by URL slug.
     *
     * @return array<string, array<string, mixed>>
     */
    public static function all(): array
    {
        return [
            'ai-solutions' => [
                'title' => 'AI Solutions',
                'subtitle' => 'Intelligent automation and AI powered tools that improve how your business operates.',
                'icon' => 'bx-brain',
                'heading' => 'Put Artificial Intelligence to Work in Your Business',
                'description' => 'Our AI Solutions service helps businesses use artificial intelligence to automate processes, gain insight from their data, and make better decisions. We build custom AI models and integrate them into the workflows you already use.',
                'description_extended' => 'From natural language processing to document understanding and predictive analytics, we deliver complete AI solutions shaped around your business. Every solution is built to be reliable in production, careful with your data, and maintainable by your team after handover.',
                'image' => 'https://images.unsplash.com/photo-1677442136019-21780ecad995?w=600&h=450&fit=crop',
                'meta_description' => 'AI Solutions by Aloflux. Custom AI powered tools and automation for UK and European businesses.',
                'features' => [
                    ['icon' => 'bx-bot', 'title' => 'Custom AI Models', 'description' => 'Machine learning models built and trained on your data to solve your specific business challenges.'],
                    ['icon' => 'bx-analyse', 'title' => 'Predictive Analytics', 'description' => 'Data driven insight and forecasting to help you make informed decisions ahead of the curve.'],
                    ['icon' => 'bx-cog', 'title' => 'Process Automation', 'description' => 'Intelligent automation of repetitive tasks, freeing your team to focus on strategic work.'],
                ],
            ],
            'offline-first-development' => [
                'title' => 'Offline First Development',
                'subtitle' => 'Software that keeps working when the internet connection does not.',
                'icon' => 'bx-shield',
                'heading' => 'Build Software That Works Everywhere',
                'description' => 'We design and build software on offline first architectures for teams that cannot rely on a constant connection: field staff, remote sites, warehouses, vehicles, and organisations operating across regions with patchy coverage. Applications sync automatically when connectivity returns, so no data is lost.',
                'description_extended' => 'An offline first approach means your operations never stop because a network does. We use proven synchronisation techniques to keep data consistent across every device and location, with conflict resolution built in.',
                'image' => 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=600&h=450&fit=crop',
                'meta_description' => 'Offline First Development by Aloflux. Software that keeps working without an internet connection.',
                'features' => [
                    ['icon' => 'bx-data', 'title' => 'Automatic Data Sync', 'description' => 'Background synchronisation as soon as connectivity returns, with conflict resolution built in.'],
                    ['icon' => 'bx-mobile-alt', 'title' => 'Works on Every Device', 'description' => 'Runs across mobile, tablet, and desktop with a consistent experience everywhere.'],
                    ['icon' => 'bx-lock-alt', 'title' => 'Data Security', 'description' => 'Encryption in transit and at rest keeps your data secure whether stored locally or syncing to the cloud.'],
                ],
            ],
            'systems-integration' => [
                'title' => 'Systems Integration',
                'subtitle' => 'Connect your tools and systems into one unified workflow.',
                'icon' => 'bx-transfer',
                'heading' => 'Unify Your Business Systems',
                'description' => 'We integrate separate systems, databases, and applications into connected workflows across your organisation. Our integration work removes data silos and keeps information flowing between platforms in real time.',
                'description_extended' => 'Whether you need to connect legacy systems to modern applications, integrate third party APIs, or build custom middleware, our team delivers robust, scalable integrations that your staff can depend on.',
                'image' => 'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=600&h=450&fit=crop',
                'meta_description' => 'Systems Integration by Aloflux. Connect your business tools and platforms into one workflow.',
                'features' => [
                    ['icon' => 'bx-link', 'title' => 'API Integration', 'description' => 'Connect with any third party service through custom API integrations and middleware.'],
                    ['icon' => 'bx-sync', 'title' => 'Real Time Sync', 'description' => 'Keep every system in step with live data flow and automatic updates across platforms.'],
                    ['icon' => 'bx-server', 'title' => 'Legacy Modernisation', 'description' => 'Bridge legacy systems and modern applications without disrupting daily operations.'],
                ],
            ],
            'enterprise-automation' => [
                'title' => 'Enterprise Automation',
                'subtitle' => 'Streamline your operations with custom workflow automation.',
                'icon' => 'bx-cog',
                'heading' => 'Automate Your Enterprise Workflows',
                'description' => 'Custom workflow automation for SMEs and growing organisations. We help businesses reduce manual work, cut errors, and run their operations more efficiently.',
                'description_extended' => 'Our automation work covers everything from document processing and approval workflows to inventory management and customer communications. Each solution is shaped around your specific business processes.',
                'image' => 'https://images.unsplash.com/photo-1518432031352-d6fc5c10da5a?w=600&h=450&fit=crop',
                'meta_description' => 'Enterprise Automation by Aloflux. Custom workflow automation for UK and European SMEs.',
                'features' => [
                    ['icon' => 'bx-task', 'title' => 'Workflow Design', 'description' => 'Workflows designed to match your exact business processes and approval chains.'],
                    ['icon' => 'bx-bar-chart-alt-2', 'title' => 'Performance Tracking', 'description' => 'Live dashboards and reporting to monitor workflow performance and spot bottlenecks.'],
                    ['icon' => 'bx-bell', 'title' => 'Smart Notifications', 'description' => 'Automated alerts and notifications that keep your team informed and tasks moving.'],
                ],
            ],
            'marketing' => [
                'title' => 'Marketing',
                'subtitle' => 'Strategic digital marketing to grow your brand.',
                'icon' => 'bx-line-chart',
                'heading' => 'Grow Your Brand with Digital Marketing',
                'description' => 'Our marketing services help businesses reach their target audience through strategic digital campaigns. We combine data driven planning with creative storytelling to maximise your brand\'s impact.',
                'description_extended' => 'From brand strategy and market research to campaign execution and performance analysis, we provide complete marketing support tailored to UK and European audiences.',
                'image' => 'https://images.unsplash.com/photo-1533750349088-cd871a92f312?w=600&h=450&fit=crop',
                'meta_description' => 'Digital Marketing by Aloflux. Strategic marketing for UK and European businesses.',
                'features' => [
                    ['icon' => 'bx-target-lock', 'title' => 'Targeted Campaigns', 'description' => 'Data driven campaigns that reach the right audience at the right time with the right message.'],
                    ['icon' => 'bx-trending-up', 'title' => 'Growth Strategy', 'description' => 'Growth strategies that align your marketing effort with your business objectives.'],
                    ['icon' => 'bx-bar-chart', 'title' => 'Analytics and Reporting', 'description' => 'Clear analytics and reporting to measure campaign performance and optimise return on investment.'],
                ],
            ],
            'content-marketing' => [
                'title' => 'Content Marketing',
                'subtitle' => 'Compelling content that engages your audience and drives results.',
                'icon' => 'bx-edit',
                'heading' => 'Create Content That Converts',
                'description' => 'Our content marketing service helps businesses create and distribute valuable, relevant content that attracts and retains a clearly defined audience. We craft stories that resonate with your target market.',
                'description_extended' => 'From blog posts and articles to video content and infographics, we develop content strategies that build brand authority, drive organic traffic, and generate quality leads for your business.',
                'image' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?w=600&h=450&fit=crop',
                'meta_description' => 'Content Marketing by Aloflux. Content strategies that engage UK and European audiences.',
                'features' => [
                    ['icon' => 'bx-pen', 'title' => 'Content Strategy', 'description' => 'Content plans aligned with your brand voice, audience interests, and business goals.'],
                    ['icon' => 'bx-video', 'title' => 'Content in Every Format', 'description' => 'Blog posts, videos, infographics, and more, in the formats your audience prefers.'],
                    ['icon' => 'bx-calendar', 'title' => 'Content Calendar', 'description' => 'Organised publishing schedules that keep your output consistent and your audience engaged.'],
                ],
            ],
            'social-media-marketing' => [
                'title' => 'Social Media Marketing',
                'subtitle' => 'Build and grow your social media presence with targeted strategies.',
                'icon' => 'bx-share-alt',
                'heading' => 'Grow Your Social Presence',
                'description' => 'We help businesses build a strong social media presence through targeted campaigns, community management, and engaging content. Our strategies are designed to raise brand awareness and drive meaningful engagement.',
                'description_extended' => 'We manage your presence across the major platforms, creating content calendars, running paid campaigns, and engaging with your community to build lasting relationships with your audience.',
                'image' => 'https://images.unsplash.com/photo-1611162617474-5b21e879e113?w=600&h=450&fit=crop',
                'meta_description' => 'Social Media Marketing by Aloflux. Grow your social presence and engagement.',
                'features' => [
                    ['icon' => 'bx-group', 'title' => 'Community Management', 'description' => 'Active community management that builds trust and genuine relationships with your audience.'],
                    ['icon' => 'bx-image', 'title' => 'Visual Content', 'description' => 'Striking graphics, videos, and stories designed to stop the scroll and drive engagement.'],
                    ['icon' => 'bx-dollar', 'title' => 'Paid Advertising', 'description' => 'Targeted social media advertising that maximises reach and delivers measurable results.'],
                ],
            ],
            'search-engine-optimization' => [
                'title' => 'Search Engine Optimisation',
                'subtitle' => 'Improve your search rankings and drive organic traffic.',
                'icon' => 'bx-search-alt',
                'heading' => 'Rank Higher, Get Found',
                'description' => 'Our SEO services help businesses improve their search rankings and drive organic traffic to their websites. We use data driven strategies and proven practices to raise your online visibility.',
                'description_extended' => 'From technical SEO audits and keyword research to on page optimisation and link building, we deliver SEO that produces sustainable results over the long term.',
                'image' => 'https://images.unsplash.com/photo-1432888498266-38ffec3eaf0a?w=600&h=450&fit=crop',
                'meta_description' => 'SEO by Aloflux. Improve your search rankings and drive organic traffic.',
                'features' => [
                    ['icon' => 'bx-search', 'title' => 'Keyword Research', 'description' => 'Thorough keyword research to identify the valuable searches your target audience is making.'],
                    ['icon' => 'bx-code-block', 'title' => 'Technical SEO', 'description' => 'Technical audits and optimisations so your website is fast, crawlable, and search engine friendly.'],
                    ['icon' => 'bx-link-alt', 'title' => 'Link Building', 'description' => 'Strategic link building that strengthens your domain authority and search rankings.'],
                ],
            ],
            'digital-commerce' => [
                'title' => 'Digital Commerce Infrastructure',
                'subtitle' => 'Ecommerce platforms, payment gateways, and cross border transaction tooling.',
                'icon' => 'bx-store',
                'heading' => 'Build Commerce Infrastructure That Scales',
                'description' => 'We design and build digital commerce systems for businesses that need reliable, scalable transaction infrastructure. From online storefronts to POS and inventory management, we cover the full stack of commerce operations.',
                'description_extended' => 'Our team integrates payment gateways including Pesapal, DusuPay, SeerBit, Tazapay, and Dodo Payments, supporting cross border transactions and local payment methods. We also build custom POS systems and inventory management platforms shaped around your business operations.',
                'image' => 'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=600&h=450&fit=crop',
                'meta_description' => 'Digital Commerce Infrastructure by Aloflux. Ecommerce, POS, payment gateways, and cross border transaction tooling.',
                'features' => [
                    ['icon' => 'bx-credit-card', 'title' => 'Payment Gateway Integration', 'description' => 'Integrate Pesapal, DusuPay, SeerBit, Tazapay, Dodo Payments, and other gateways for smooth local and cross border payments.'],
                    ['icon' => 'bx-store-alt', 'title' => 'Ecommerce Platforms', 'description' => 'Custom online storefronts and marketplaces built for performance, conversion, and scale.'],
                    ['icon' => 'bx-package', 'title' => 'POS and Inventory Management', 'description' => 'Point of sale systems and inventory management platforms built for your retail or distribution operations.'],
                ],
            ],
            'it-managed-services' => [
                'title' => 'IT Managed Services',
                'subtitle' => 'Web hosting, email infrastructure, domain administration, and IT support.',
                'icon' => 'bx-server',
                'heading' => 'Reliable IT Management Without the Overhead',
                'description' => 'We manage the IT infrastructure that keeps your organisation running. Web hosting, email infrastructure, domain administration, and ongoing IT support, all handled by a dedicated team so your internal staff can focus on what matters.',
                'description_extended' => 'Our managed services cover Linux server administration, cPanel and WHM environments, email infrastructure setup and maintenance, SSL management, and responsive IT support. We currently manage services for organisations including CONSENT and FoSCU.',
                'image' => 'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=600&h=450&fit=crop',
                'meta_description' => 'IT Managed Services by Aloflux. Web hosting, email infrastructure, domain administration, and IT support.',
                'features' => [
                    ['icon' => 'bx-cloud', 'title' => 'Web Hosting and Server Management', 'description' => 'Reliable Linux server administration and hosting environments managed to keep your platforms fast and available.'],
                    ['icon' => 'bx-envelope', 'title' => 'Email Infrastructure', 'description' => 'Professional email infrastructure setup, configuration, and ongoing maintenance for your organisation.'],
                    ['icon' => 'bx-support', 'title' => 'IT Support', 'description' => 'Responsive IT support covering domains, SSL certificates, and everyday technical issues for your team.'],
                ],
            ],
        ];
    }
}
