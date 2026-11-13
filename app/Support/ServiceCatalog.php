<?php

namespace App\Support;

class ServiceCatalog
{
    /**
     * Old service slugs that now live under a merged page.
     *
     * @var array<string, string>
     */
    public const REDIRECTS = [
        'marketing' => 'digital-marketing',
        'content-marketing' => 'digital-marketing',
        'social-media-marketing' => 'digital-marketing',
        'search-engine-optimization' => 'digital-marketing',
    ];

    /**
     * The three services featured as core offerings, in display order.
     *
     * @var list<string>
     */
    public const CORE = [
        'custom-software-development',
        'enterprise-automation',
        'digital-commerce',
    ];

    /**
     * Core services with their slug included, ready for display.
     *
     * @return array<string, array<string, mixed>>
     */
    public static function core(): array
    {
        return array_intersect_key(self::all(), array_flip(self::CORE));
    }

    /**
     * Service detail pages keyed by URL slug.
     *
     * @return array<string, array<string, mixed>>
     */
    public static function all(): array
    {
        return [
            'custom-software-development' => [
                'title' => 'Custom Software Development',
                'subtitle' => 'Web applications, APIs, and internal tools built around how your business works.',
                'summary' => 'Web platforms, APIs, and internal tools designed around your processes, from a first MVP to systems your whole organisation runs on.',
                'highlights' => ['Web applications and client portals', 'APIs and third party integrations', 'Internal tools and dashboards'],
                'icon' => 'bx-code-alt',
                'heading' => 'Software Shaped Around Your Business',
                'description' => 'Off the shelf tools force you to work their way. We build web applications, APIs, and internal tools that fit how your business actually operates, using Laravel and modern web technology that any competent team can maintain.',
                'description_extended' => 'Every build starts with a paid Discovery Sprint, so scope, architecture, and cost are clear before development begins. We then deliver against agreed milestones, with working software you can review at each stage and full documentation at handover.',
                'image' => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=600&h=450&fit=crop',
                'meta_description' => 'Custom Software Development by Aloflux. Web applications, APIs, and internal tools for UK and European businesses.',
                'features' => [
                    ['icon' => 'bx-window-alt', 'title' => 'Web Applications', 'description' => 'Customer portals, booking systems, and line of business applications that run in any browser.'],
                    ['icon' => 'bx-git-merge', 'title' => 'APIs and Integrations', 'description' => 'Clean, documented APIs that connect your software to payment providers, CRMs, and partners.'],
                    ['icon' => 'bx-file-find', 'title' => 'Clear Handover', 'description' => 'Documented code and architecture so your team, or any future supplier, can take it forward.'],
                ],
            ],
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
                'summary' => 'Workflow automation, approval chains, and document processing that remove manual work and cut errors across your operations.',
                'highlights' => ['Approval and document workflows', 'System integrations and data sync', 'Live dashboards and alerts'],
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
            'digital-marketing' => [
                'title' => 'Digital Marketing',
                'subtitle' => 'Content, social media, and search working together to bring you qualified leads.',
                'icon' => 'bx-line-chart',
                'heading' => 'Get Found by the Right Customers',
                'description' => 'Good software needs people to find it. Our digital marketing service combines content, social media, and search engine optimisation into one plan, so every channel supports the same goals instead of competing for budget.',
                'description_extended' => 'We start with your audience and the searches they make, then build the content, campaigns, and technical SEO that put you in front of them. Reporting is tied to leads and revenue, not vanity metrics, and everything is tailored to UK and European audiences.',
                'image' => 'https://images.unsplash.com/photo-1533750349088-cd871a92f312?w=600&h=450&fit=crop',
                'meta_description' => 'Digital Marketing by Aloflux. Content, social media, and SEO for UK and European businesses.',
                'features' => [
                    ['icon' => 'bx-search-alt', 'title' => 'Search Engine Optimisation', 'description' => 'Keyword research, technical audits, and on page optimisation that improve rankings and bring in organic traffic.'],
                    ['icon' => 'bx-edit', 'title' => 'Content Marketing', 'description' => 'Articles, case studies, and guides that build authority and give your sales team something worth sharing.'],
                    ['icon' => 'bx-share-alt', 'title' => 'Social Media and Paid Campaigns', 'description' => 'Community management and targeted paid campaigns that reach decision makers where they spend time.'],
                ],
            ],
            'digital-commerce' => [
                'title' => 'Digital Commerce Infrastructure',
                'summary' => 'Online storefronts, POS and inventory systems, and payment integrations, including tooling for cross border transactions.',
                'highlights' => ['Ecommerce storefronts', 'POS and inventory management', 'Payment gateway integrations'],
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
