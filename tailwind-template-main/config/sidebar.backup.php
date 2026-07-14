<?php

return [
    [
        'type' => 'section',
        'name' => 'MAIN',
        'items' => [
            [
                'type' => 'accordion',
                'name' => 'Dashboard',
                'icon' => 'dashboard',
                'badge' => ['text' => '30', 'class' => 'orange'],
                'sub_items' => [
                    ['name' => 'eCommerce', 'url' => '/dashboard'],
                    ['name' => 'CRM', 'url' => '/dashboard/crm'],
                    ['name' => 'Project Management', 'url' => '/dashboard/project-management'],
                    ['name' => 'LMS', 'url' => '/dashboard/lms'],
                    ['name' => 'HelpDesk', 'url' => '/dashboard/helpdesk', 'badge' => ['text' => 'Hot', 'class' => 'orange']],
                    ['name' => 'Analytics', 'url' => '/dashboard/analytics'],
                    ['name' => 'Crypto', 'url' => '/dashboard/crypto'],
                    ['name' => 'Sales', 'url' => '/dashboard/sales'],
                    ['name' => 'Hospital', 'url' => '/dashboard/hospital'],
                    ['name' => 'HRM', 'url' => '/dashboard/hrm'],
                    ['name' => 'School', 'url' => '/dashboard/school'],
                    ['name' => 'Call Center', 'url' => '/dashboard/call-center', 'badge' => ['text' => 'Popular', 'class' => 'success']],
                    ['name' => 'Marketing', 'url' => '/dashboard/marketing'],
                    ['name' => 'NFT', 'url' => '/dashboard/nft'],
                    ['name' => 'SaaS', 'url' => '/dashboard/saas'],
                    ['name' => 'Real Estate', 'url' => '/dashboard/real-estate', 'badge' => ['text' => 'Top', 'class' => 'purple']],
                    ['name' => 'Shipment', 'url' => '/dashboard/shipment'],
                    ['name' => 'Finance', 'url' => '/dashboard/finance'],
                    ['name' => 'POS System', 'url' => '/dashboard/pos-system', 'badge' => ['text' => 'New', 'class' => 'orange']],
                    ['name' => 'Podcast', 'url' => '/dashboard/podcast', 'badge' => ['text' => 'New', 'class' => 'orange']],
                    ['name' => 'Social Media', 'url' => '/dashboard/social-media', 'badge' => ['text' => 'New', 'class' => 'orange']],
                    ['name' => 'Doctor', 'url' => '/dashboard/doctor', 'badge' => ['text' => 'New', 'class' => 'orange']],
                    ['name' => 'Beauty Salon', 'url' => '/dashboard/beauty-salon', 'badge' => ['text' => 'New', 'class' => 'orange']],
                    ['name' => 'Store Analysis', 'url' => '/dashboard/store-analysis', 'badge' => ['text' => 'New', 'class' => 'orange']],
                    ['name' => 'Restaurant', 'url' => '/dashboard/restaurant', 'badge' => ['text' => 'New', 'class' => 'orange']],
                    ['name' => 'Hotel', 'url' => '/dashboard/hotel', 'badge' => ['text' => 'New', 'class' => 'orange']],
                    ['name' => 'Real Estate Agent', 'url' => '/dashboard/real-estate-agent', 'badge' => ['text' => 'New', 'class' => 'orange']],
                    ['name' => 'Credit Card', 'url' => '/dashboard/credit-card', 'badge' => ['text' => 'New', 'class' => 'orange']],
                    ['name' => 'Crypto Trader', 'url' => '/dashboard/crypto-trader', 'badge' => ['text' => 'New', 'class' => 'orange']],
                    ['name' => 'Crypto Perf.', 'url' => '/dashboard/crypto-performance', 'badge' => ['text' => 'New', 'class' => 'orange']],
                ]
            ],
            [
                'type' => 'accordion',
                'name' => 'Front Pages',
                'icon' => 'note_stack',
                'sub_items' => [
                    ['name' => 'Home', 'url' => '/'],
                    ['name' => 'Features', 'url' => '/features'],
                    ['name' => 'Team', 'url' => '/team'],
                    ['name' => 'FAQ', 'url' => '/faq'],
                    ['name' => 'contact', 'url' => '/contact'],
                ]
            ]
        ]
    ],
    [
        'type' => 'section',
        'name' => 'Apps & Pages',
        'items' => [
            [
                'type' => 'link',
                'name' => 'To Do List',
                'icon' => 'format_list_bulleted',
                'url' => '/dashboard/to-do-list'
            ],
            [
                'type' => 'link',
                'name' => 'Calendar',
                'icon' => 'date_range',
                'url' => '/dashboard/calendar'
            ],
            [
                'type' => 'link',
                'name' => 'Contacts',
                'icon' => 'contact_page',
                'url' => '/dashboard/contacts'
            ],
            [
                'type' => 'link',
                'name' => 'Chat',
                'icon' => 'chat',
                'url' => '/dashboard/chat'
            ],
            [
                'type' => 'accordion',
                'name' => 'Email',
                'icon' => 'mail',
                'badge' => ['text' => '3', 'class' => 'success'],
                'sub_items' => [
                    ['name' => 'Inbox', 'url' => '/dashboard/inbox'],
                    ['name' => 'Compose', 'url' => '/dashboard/compose'],
                    ['name' => 'Read', 'url' => '/dashboard/read'],
                ]
            ],
            [
                'type' => 'link',
                'name' => 'Kanban Board',
                'icon' => 'team_dashboard',
                'url' => '/dashboard/kanban-board'
            ],
            [
                'type' => 'accordion',
                'name' => 'File Manager',
                'icon' => 'folder_open',
                'badge' => ['text' => '7', 'class' => 'danger'],
                'sub_items' => [
                    ['name' => 'My Drive', 'url' => '/dashboard/my-drive'],
                    ['name' => 'Assets', 'url' => '/dashboard/my-assets'],
                    ['name' => 'Projects', 'url' => '/dashboard/my-projects'],
                    ['name' => 'Personal', 'url' => '/dashboard/my-personal'],
                    ['name' => 'Applications', 'url' => '/dashboard/my-applications'],
                    ['name' => 'Documents', 'url' => '/dashboard/my-documents'],
                    ['name' => 'Media', 'url' => '/dashboard/my-media'],
                ]
            ],
            [
                'type' => 'accordion',
                'name' => 'eCommerce',
                'icon' => 'shopping_cart',
                'sub_items' => [
                    ['name' => 'Products Grid', 'url' => '/dashboard/products-grid'],
                    ['name' => 'Products List', 'url' => '/dashboard/products-list'],
                    ['name' => 'Product Details', 'url' => '/dashboard/product-details'],
                    ['name' => 'Create Product', 'url' => '/dashboard/create-product'],
                    ['name' => 'Edit Product', 'url' => '/dashboard/edit-product'],
                    ['name' => 'Cart', 'url' => '/dashboard/cart'],
                    ['name' => 'Checkout', 'url' => '/dashboard/checkout'],
                    ['name' => 'Orders', 'url' => '/dashboard/orders'],
                    ['name' => 'Order Details', 'url' => '/dashboard/order-details'],
                    ['name' => 'Create Order', 'url' => '/dashboard/create-order'],
                    ['name' => 'Order Tracking', 'url' => '/dashboard/order-tracking'],
                    ['name' => 'Customers', 'url' => '/dashboard/customers'],
                    ['name' => 'Customer Details', 'url' => '/dashboard/customer-details'],
                    ['name' => 'Categories', 'url' => '/dashboard/categories'],
                    ['name' => 'Sellers', 'url' => '/dashboard/sellers'],
                    ['name' => 'Seller Details', 'url' => '/dashboard/seller-details'],
                    ['name' => 'Create Seller', 'url' => '/dashboard/create-seller'],
                    ['name' => 'Reviews', 'url' => '/dashboard/reviews'],
                    ['name' => 'Refunds', 'url' => '/dashboard/refunds'],
                ]
            ],
            [
                'type' => 'accordion',
                'name' => 'CRM',
                'icon' => 'handshake',
                'sub_items' => [
                    ['name' => 'Contacts', 'url' => '/dashboard/crm-contacts'],
                    ['name' => 'Customers', 'url' => '/dashboard/crm-customers'],
                    ['name' => 'Leads', 'url' => '/dashboard/crm-leads'],
                    ['name' => 'Deals', 'url' => '/dashboard/crm-deals'],
                ]
            ],
            [
                'type' => 'accordion',
                'name' => 'Project Management',
                'icon' => 'description',
                'sub_items' => [
                    ['name' => 'Project Overview', 'url' => '/dashboard/project-overview'],
                    ['name' => 'Projects List', 'url' => '/dashboard/projects-list'],
                    ['name' => 'Create Project', 'url' => '/dashboard/create-project'],
                    ['name' => 'Clients', 'url' => '/dashboard/pm-clients'],
                    ['name' => 'Teams', 'url' => '/dashboard/pm-teams'],
                    ['name' => 'Kanban Board', 'url' => '/dashboard/pm-kanban-board'],
                    ['name' => 'Users', 'url' => '/dashboard/pm-users'],
                ]
            ],
            [
                'type' => 'accordion',
                'name' => 'LMS',
                'icon' => 'auto_stories',
                'sub_items' => [
                    ['name' => 'Courses List', 'url' => '/dashboard/courses-list'],
                    ['name' => 'Course Details', 'url' => '/dashboard/course-details'],
                    ['name' => 'Lesson Preview', 'url' => '/dashboard/lesson-preview'],
                    ['name' => 'Create Course', 'url' => '/dashboard/create-course'],
                    ['name' => 'Edit Course', 'url' => '/dashboard/edit-course'],
                    ['name' => 'Instructors', 'url' => '/dashboard/instructors'],
                ]
            ],
            [
                'type' => 'accordion',
                'name' => 'HelpDesk',
                'icon' => 'support',
                'sub_items' => [
                    ['name' => 'Tickets', 'url' => '/dashboard/tickets'],
                    ['name' => 'Ticket Details', 'url' => '/dashboard/ticket-details'],
                    ['name' => 'Agents', 'url' => '/dashboard/agents'],
                    ['name' => 'Reports', 'url' => '/dashboard/reports'],
                ]
            ],
            [
                'type' => 'accordion',
                'name' => 'NFT Marketplace',
                'icon' => 'store',
                'sub_items' => [
                    ['name' => 'Marketplace', 'url' => '/dashboard/nft-marketplace'],
                    ['name' => 'Explore All', 'url' => '/dashboard/nft-explore-all'],
                    ['name' => 'Live Auction', 'url' => '/dashboard/nft-live-auction'],
                    ['name' => 'NFT Details', 'url' => '/dashboard/nft-details'],
                    ['name' => 'Creators', 'url' => '/dashboard/nft-creators'],
                    ['name' => 'Creator Details', 'url' => '/dashboard/nft-creator-details'],
                    ['name' => 'Wallet Connect', 'url' => '/dashboard/nft-wallet-connect'],
                    ['name' => 'Create NFT', 'url' => '/dashboard/create-nft'],
                ]
            ],
            [
                'type' => 'accordion',
                'name' => 'Real Estate',
                'icon' => 'real_estate_agent',
                'sub_items' => [
                    ['name' => 'Property List', 'url' => '/dashboard/property-list'],
                    ['name' => 'Property Details', 'url' => '/dashboard/property-details'],
                    ['name' => 'Add Property', 'url' => '/dashboard/re-add-property'],
                    ['name' => 'Agents', 'url' => '/dashboard/re-agents'],
                    ['name' => 'Agent Details', 'url' => '/dashboard/re-agent-details'],
                    ['name' => 'Add Agent', 'url' => '/dashboard/re-add-agent'],
                    ['name' => 'Customers', 'url' => '/dashboard/re-customers'],
                ]
            ],
            [
                'type' => 'accordion',
                'name' => 'Finance',
                'icon' => 'calculate',
                'sub_items' => [
                    ['name' => 'Wallet', 'url' => '/dashboard/wallet'],
                    ['name' => 'Transactions', 'url' => '/dashboard/transactions'],
                ]
            ],
            [
                'type' => 'accordion',
                'name' => 'Doctor',
                'icon' => 'badge',
                'sub_items' => [
                    ['name' => 'Patients List', 'url' => '/dashboard/patients-list'],
                    ['name' => 'Add Patient', 'url' => '/dashboard/add-patient'],
                    ['name' => 'Patient Details', 'url' => '/dashboard/patient-details'],
                    ['name' => 'Appointments', 'url' => '/dashboard/appointments'],
                    ['name' => 'Prescriptions', 'url' => '/dashboard/prescriptions'],
                    ['name' => 'Write a Prescription', 'url' => '/dashboard/write-prescription'],
                ]
            ],
            [
                'type' => 'accordion',
                'name' => 'Restaurant',
                'icon' => 'lunch_dining',
                'sub_items' => [
                    ['name' => 'Menus', 'url' => '/dashboard/menus'],
                    ['name' => 'Dish Details', 'url' => '/dashboard/dish-details'],
                ]
            ],
            [
                'type' => 'accordion',
                'name' => 'Hotel',
                'icon' => 'hotel',
                'sub_items' => [
                    ['name' => 'Rooms List', 'url' => '/dashboard/rooms-list'],
                    ['name' => 'Room Details', 'url' => '/dashboard/room-details'],
                    ['name' => 'Guests List', 'url' => '/dashboard/guests-list'],
                ]
            ],
            [
                'type' => 'accordion',
                'name' => 'Real Estate Agent',
                'icon' => 'location_away',
                'sub_items' => [
                    ['name' => 'Properties', 'url' => '/dashboard/rea-properties'],
                    ['name' => 'Property Details', 'url' => '/dashboard/rea-property-details'],
                ]
            ],
            [
                'type' => 'accordion',
                'name' => 'Crypto Trader',
                'icon' => 'paid',
                'sub_items' => [
                    ['name' => 'Transactions', 'url' => '/dashboard/ct-transactions'],
                    ['name' => 'Gainers & Losers', 'url' => '/dashboard/ct-gainers-losers'],
                    ['name' => 'Wallet', 'url' => '/dashboard/ct-wallet'],
                ]
            ],
            [
                'type' => 'accordion',
                'name' => 'Events',
                'icon' => 'local_activity',
                'sub_items' => [
                    ['name' => 'Events Grid', 'url' => '/dashboard/events-grid'],
                    ['name' => 'Events List', 'url' => '/dashboard/events-list'],
                    ['name' => 'Event Details', 'url' => '/dashboard/event-details'],
                    ['name' => 'Create An Event', 'url' => '/dashboard/create-an-event'],
                    ['name' => 'Edit An Event', 'url' => '/dashboard/edit-an-event'],
                ]
            ],
            [
                'type' => 'accordion',
                'name' => 'Social',
                'icon' => 'share',
                'sub_items' => [
                    ['name' => 'Profile', 'url' => '/dashboard/social-profile'],
                    ['name' => 'Settings', 'url' => '/dashboard/social-settings'],
                ]
            ],
            [
                'type' => 'accordion',
                'name' => 'Invoices',
                'icon' => 'content_paste',
                'sub_items' => [
                    ['name' => 'Invoices', 'url' => '/dashboard/invoices'],
                    ['name' => 'Invoice Details', 'url' => '/dashboard/invoice-details'],
                    ['name' => 'Create Invoice', 'url' => '/dashboard/create-invoice'],
                    ['name' => 'Edit Invoice', 'url' => '/dashboard/edit-invoice'],
                ]
            ],
            [
                'type' => 'accordion',
                'name' => 'Users',
                'icon' => 'person',
                'sub_items' => [
                    ['name' => 'Team Members', 'url' => '/dashboard/team-members'],
                    ['name' => 'Users List', 'url' => '/dashboard/users-list'],
                    ['name' => 'Add User', 'url' => '/dashboard/add-user'],
                ]
            ],
            [
                'type' => 'accordion',
                'name' => 'Profile',
                'icon' => 'account_box',
                'sub_items' => [
                    ['name' => 'User Profile', 'url' => '/dashboard/user-profile'],
                    ['name' => 'Teams', 'url' => '/dashboard/profile-teams'],
                    ['name' => 'Projects', 'url' => '/dashboard/profile-projects'],
                ]
            ],
            [
                'type' => 'link',
                'name' => 'Starter',
                'icon' => 'star_border',
                'url' => '/dashboard/starter'
            ],
        ]
    ],
    [
        'type' => 'section',
        'name' => 'MODULES',
        'items' => [
            [
                'type' => 'accordion',
                'name' => 'Icons',
                'icon' => 'emoji_emotions',
                'sub_items' => [
                    ['name' => 'Material Symbols', 'url' => '/dashboard/material-symbols'],
                    ['name' => 'RemixIcon', 'url' => '/dashboard/remixicon'],
                ]
            ],
            [
                'type' => 'accordion',
                'name' => 'UI Elements',
                'icon' => 'qr_code_scanner',
                'sub_items' => [
                    ['name' => 'Alerts', 'url' => '/dashboard/alerts'],
                    ['name' => 'Avatars', 'url' => '/dashboard/avatars'],
                    ['name' => 'Accordion', 'url' => '/dashboard/accordion'],
                    ['name' => 'Badges', 'url' => '/dashboard/badges'],
                    ['name' => 'Buttons', 'url' => '/dashboard/buttons'],
                    ['name' => 'Breadcrumb', 'url' => '/dashboard/breadcrumb'],
                    ['name' => 'Clipboard', 'url' => '/dashboard/clipboard'],
                    ['name' => 'Dropdowns', 'url' => '/dashboard/dropdowns'],
                    ['name' => 'Images', 'url' => '/dashboard/images'],
                    ['name' => 'Modal', 'url' => '/dashboard/modal'],
                    ['name' => 'Pagination', 'url' => '/dashboard/pagination'],
                    ['name' => 'Popover', 'url' => '/dashboard/popover'],
                    ['name' => 'Progress', 'url' => '/dashboard/progress'],
                    ['name' => 'Tooltips', 'url' => '/dashboard/tooltips'],
                    ['name' => 'Tabs', 'url' => '/dashboard/tabs'],
                    ['name' => 'Typography', 'url' => '/dashboard/typography'],
                    ['name' => 'Videos', 'url' => '/dashboard/videos'],
                    ['name' => 'Documentation', 'url' => 'https://tailwindcss.com/docs/installation', 'external' => true],
                ]
            ],
            [
                'type' => 'link',
                'name' => 'Tables',
                'icon' => 'table_chart',
                'url' => '/dashboard/tables'
            ],
            [
                'type' => 'accordion',
                'name' => 'Forms',
                'icon' => 'forum',
                'sub_items' => [
                    ['name' => 'Input & Select', 'url' => '/dashboard/input-select'],
                    ['name' => 'Checkboxes & Radios', 'url' => '/dashboard/checkboxes-radios'],
                    ['name' => 'Rich Text Editor', 'url' => '/dashboard/rich-text-editor'],
                    ['name' => 'File Uploader', 'url' => '/dashboard/file-uploader'],
                ]
            ],
            [
                'type' => 'accordion',
                'name' => 'Charts',
                'icon' => 'pie_chart',
                'sub_items' => [
                    ['name' => 'Line', 'url' => '/dashboard/line-charts'],
                    ['name' => 'Area', 'url' => '/dashboard/area-charts'],
                    ['name' => 'Column', 'url' => '/dashboard/column-charts'],
                    ['name' => 'Mixed', 'url' => '/dashboard/mixed-charts'],
                    ['name' => 'RadialBar', 'url' => '/dashboard/radialbar-charts'],
                    ['name' => 'Radar', 'url' => '/dashboard/radar-charts'],
                    ['name' => 'Pie', 'url' => '/dashboard/pie-charts'],
                    ['name' => 'Polar', 'url' => '/dashboard/polar-charts'],
                    ['name' => 'More', 'url' => '/dashboard/more-charts'],
                ]
            ],
            [
                'type' => 'accordion',
                'name' => 'Authentication',
                'icon' => 'lock_open',
                'sub_items' => [
                    ['name' => 'Sign In', 'url' => '/sign-in'],
                    ['name' => 'Sign Up', 'url' => '/sign-up'],
                    ['name' => 'Forgot Password', 'url' => '/forgot-password'],
                    ['name' => 'Reset Password', 'url' => '/reset-password'],
                    ['name' => 'Confirm Email', 'url' => '/confirm-email'],
                    ['name' => 'Lock Screen', 'url' => '/lock-screen'],
                    ['name' => 'Logout', 'url' => '/logout'],
                ]
            ],
            [
                'type' => 'accordion',
                'name' => 'Extra Pages',
                'icon' => 'content_copy',
                'sub_items' => [
                    ['name' => 'Pricing', 'url' => '/dashboard/pricing'],
                    ['name' => 'Timeline', 'url' => '/dashboard/timeline'],
                    ['name' => 'FAQ', 'url' => '/dashboard/faq'],
                    ['name' => 'Gallery', 'url' => '/dashboard/gallery'],
                    ['name' => 'Testimonials', 'url' => '/dashboard/testimonials'],
                    ['name' => 'Search', 'url' => '/dashboard/search'],
                    ['name' => 'Coming Soon', 'url' => '/dashboard/coming-soon'],
                    ['name' => 'Blank Page', 'url' => '/dashboard/blank-page'],
                ]
            ],
            [
                'type' => 'accordion',
                'name' => 'Errors',
                'icon' => 'error',
                'sub_items' => [
                    ['name' => '404 Error Page', 'url' => '/dashboard/not-found'],
                    ['name' => 'Internal Error', 'url' => '/dashboard/internal-error'],
                ]
            ],
            [
                'type' => 'link',
                'name' => 'Widgets',
                'icon' => 'widgets',
                'url' => '/dashboard/widgets'
            ],
            [
                'type' => 'link',
                'name' => 'maps',
                'icon' => 'map',
                'url' => '/dashboard/maps'
            ],
            [
                'type' => 'link',
                'name' => 'Notifications',
                'icon' => 'notifications',
                'url' => '/dashboard/notifications'
            ],
            [
                'type' => 'link',
                'name' => 'Members',
                'icon' => 'people',
                'url' => '/dashboard/members'
            ],
        ]
    ],
    [
        'type' => 'section',
        'name' => 'Others',
        'items' => [
            [
                'type' => 'link',
                'name' => 'My Profile',
                'icon' => 'account_circle',
                'url' => '/dashboard/my-profile'
            ],
            [
                'type' => 'accordion',
                'name' => 'Settings',
                'icon' => 'settings',
                'sub_items' => [
                    ['name' => 'Account Settings', 'url' => '/dashboard/settings'],
                    ['name' => 'Change Password', 'url' => '/change-password'],
                    ['name' => 'Connections', 'url' => '/dashboard/connections'],
                    ['name' => 'Privacy Policy', 'url' => '/privacy-policy'],
                    ['name' => 'Terms & Conditions', 'url' => '/terms-conditions'],
                ]
            ],
            [
                'type' => 'accordion',
                'name' => 'Dummy Menu',
                'icon' => 'unfold_more',
                'sub_items' => [
                    ['name' => 'First', 'url' => '#'],
                    [
                        'name' => 'Second',
                        'url' => '#',
                    ],
                    ['name' => 'Third', 'url' => '#'],
                ]
            ],
            [
                'type' => 'link',
                'name' => 'Logout',
                'icon' => 'logout',
                'url' => '/'
            ],
        ]
    ],
];