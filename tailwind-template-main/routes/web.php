<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/features', function () {
    return view('features');
});
Route::get('/team', function () {
    return view('team');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/sign-in', function () {
    return view('sign-in');
});
Route::get('/sign-up', function () {
    return view('sign-up');
});
Route::get('/forgot-password', function () {
    return view('forgot-password');
});
Route::get('/reset-password', function () {
    return view('reset-password');
});
Route::get('/confirm-email', function () {
    return view('confirm-email');
});
Route::get('/lock-screen', function () {
    return view('lock-screen');
});
Route::get('/logout', function () {
    return view('logout');
});


Route::prefix('dashboard')->group(function () {
    Route::get('/', function () {
        return view('dashboard.ecommerce');
    });
    Route::get('/crm', function () {
        return view('dashboard.crm');
    });
    Route::get('/project-management', function () {
        return view('dashboard.project-management');
    });
    Route::get('/lms', function () {
        return view('dashboard.lms');
    });
    Route::get('/helpdesk', function () {
        return view('dashboard.helpdesk');
    });
    Route::get('/analytics', function () {
        return view('dashboard.analytics');
    });
    Route::get('/crypto', function () {
        return view('dashboard.crypto');
    });
    Route::get('/sales', function () {
        return view('dashboard.sales');
    });
    Route::get('/hospital', function () {
        return view('dashboard.hospital');
    });
    Route::get('/hrm', function () {
        return view('dashboard.hrm');
    });
    Route::get('/school', function () {
        return view('dashboard.school');
    });
    Route::get('/call-center', function () {
        return view('dashboard.call-center');
    });
    Route::get('/marketing', function () {
        return view('dashboard.marketing');
    });
    Route::get('/nft', function () {
        return view('dashboard.nft');
    });
    Route::get('/saas', function () {
        return view('dashboard.saas');
    });
    Route::get('/real-estate', function () {
        return view('dashboard.real-estate');
    });
    Route::get('/shipment', function () {
        return view('dashboard.shipment');
    });
    Route::get('/finance', function () {
        return view('dashboard.finance');
    });
    Route::get('/pos-system', function () {
        return view('dashboard.pos-system');
    });
    Route::get('/podcast', function () {
        return view('dashboard.podcast');
    });
    Route::get('/social-media', function () {
        return view('dashboard.social-media');
    });
    Route::get('/doctor', function () {
        return view('dashboard.doctor');
    });
    Route::get('/beauty-salon', function () {
        return view('dashboard.beauty-salon');
    });
    Route::get('/store-analysis', function () {
        return view('dashboard.store-analysis');
    });
    Route::get('/restaurant', function () {
        return view('dashboard.restaurant');
    });
    Route::get('/hotel', function () {
        return view('dashboard.hotel');
    });
    Route::get('/real-estate-agent', function () {
        return view('dashboard.real-estate-agent');
    });
    Route::get('/credit-card', function () {
        return view('dashboard.credit-card');
    });
    Route::get('/crypto-trader', function () {
        return view('dashboard.crypto-trader');
    });
    Route::get('/crypto-performance', function () {
        return view('dashboard.crypto-performance');
    });
    Route::get('/to-do-list', function () {
        return view('dashboard.to-do-list');
    });
    Route::get('/calendar', function () {
        return view('dashboard.calendar');
    });
    Route::get('/contacts', function () {
        return view('dashboard.contacts');
    });
    Route::get('/chat', function () {
        return view('dashboard.chat');
    });
    Route::get('/inbox', function () {
        return view('dashboard.inbox');
    });
    Route::get('/compose', function () {
        return view('dashboard.compose');
    });
    Route::get('/read', function () {
        return view('dashboard.read');
    });
    Route::get('/kanban-board', function () {
        return view('dashboard.kanban-board');
    });

    Route::get('/my-drive', function () {
        return view('dashboard.my-drive');
    });

    Route::get('/my-assets', function () {
        return view('dashboard.my-assets');
    });

    Route::get('/my-projects', function () {
        return view('dashboard.my-projects');
    });

    Route::get('/my-personal', function () {
        return view('dashboard.my-personal');
    });

    Route::get('/my-applications', function () {
        return view('dashboard.my-applications');
    });

    Route::get('/my-documents', function () {
        return view('dashboard.my-documents');
    });

    Route::get('/my-media', function () {
        return view('dashboard.my-media');
    });
    Route::get('/my-recent', function () {
        return view('dashboard.my-recent');
    });
    Route::get('/my-important', function () {
        return view('dashboard.my-important');
    });
    Route::get('/products-grid', function () {
        return view('dashboard.products-grid');
    });

    Route::get('/products-list', function () {
        return view('dashboard.products-list');
    });

    Route::get('/product-details', function () {
        return view('dashboard.product-details');
    });

    Route::get('/create-product', function () {
        return view('dashboard.create-product');
    });

    Route::get('/edit-product', function () {
        return view('dashboard.edit-product');
    });

    Route::get('/cart', function () {
        return view('dashboard.cart');
    });

    Route::get('/checkout', function () {
        return view('dashboard.checkout');
    });

    Route::get('/orders', function () {
        return view('dashboard.orders');
    });

    Route::get('/order-details', function () {
        return view('dashboard.order-details');
    });

    Route::get('/create-order', function () {
        return view('dashboard.create-order');
    });

    Route::get('/order-tracking', function () {
        return view('dashboard.order-tracking');
    });

    Route::get('/customers', function () {
        return view('dashboard.customers');
    });

    Route::get('/customer-details', function () {
        return view('dashboard.customer-details');
    });

    Route::get('/categories', function () {
        return view('dashboard.categories');
    });

    Route::get('/sellers', function () {
        return view('dashboard.sellers');
    });

    Route::get('/seller-details', function () {
        return view('dashboard.seller-details');
    });

    Route::get('/create-seller', function () {
        return view('dashboard.create-seller');
    });

    Route::get('/reviews', function () {
        return view('dashboard.reviews');
    });

    Route::get('/refunds', function () {
        return view('dashboard.refunds');
    });

    Route::get('/crm-contacts', function () {
        return view('dashboard.crm-contacts');
    });

    Route::get('/crm-customers', function () {
        return view('dashboard.crm-customers');
    });

    Route::get('/crm-leads', function () {
        return view('dashboard.crm-leads');
    });

    Route::get('/crm-deals', function () {
        return view('dashboard.crm-deals');
    });
    Route::get('/project-overview', function () {
        return view('dashboard.project-overview');
    });

    Route::get('/projects-list', function () {
        return view('dashboard.projects-list');
    });

    Route::get('/create-project', function () {
        return view('dashboard.create-project');
    });

    Route::get('/pm-clients', function () {
        return view('dashboard.pm-clients');
    });

    Route::get('/pm-teams', function () {
        return view('dashboard.pm-teams');
    });

    Route::get('/pm-kanban-board', function () {
        return view('dashboard.pm-kanban-board');
    });

    Route::get('/pm-users', function () {
        return view('dashboard.pm-users');
    });

    Route::get('/courses-list', function () {
        return view('dashboard.courses-list');
    });

    Route::get('/course-details', function () {
        return view('dashboard.course-details');
    });

    Route::get('/lesson-preview', function () {
        return view('dashboard.lesson-preview');
    });

    Route::get('/create-course', function () {
        return view('dashboard.create-course');
    });

    Route::get('/edit-course', function () {
        return view('dashboard.edit-course');
    });

    Route::get('/instructors', function () {
        return view('dashboard.instructors');
    });

    Route::get('/tickets', function () {
        return view('dashboard.tickets');
    });

    Route::get('/ticket-details', function () {
        return view('dashboard.ticket-details');
    });

    Route::get('/agents', function () {
        return view('dashboard.agents');
    });

    Route::get('/reports', function () {
        return view('dashboard.reports');
    });

    Route::get('/nft-marketplace', function () {
        return view('dashboard.nft-marketplace');
    });

    Route::get('/nft-explore-all', function () {
        return view('dashboard.nft-explore-all');
    });

    Route::get('/nft-live-auction', function () {
        return view('dashboard.nft-live-auction');
    });

    Route::get('/nft-details', function () {
        return view('dashboard.nft-details');
    });

    Route::get('/nft-creators', function () {
        return view('dashboard.nft-creators');
    });

    Route::get('/nft-creator-details', function () {
        return view('dashboard.nft-creator-details');
    });

    Route::get('/nft-wallet-connect', function () {
        return view('dashboard.nft-wallet-connect');
    });

    Route::get('/create-nft', function () {
        return view('dashboard.create-nft');
    });

    Route::get('/property-list', function () {
        return view('dashboard.property-list');
    });

    Route::get('/property-details', function () {
        return view('dashboard.property-details');
    });

    Route::get('/re-add-property', function () {
        return view('dashboard.re-add-property');
    });

    Route::get('/re-agents', function () {
        return view('dashboard.re-agents');
    });

    Route::get('/re-agent-details', function () {
        return view('dashboard.re-agent-details');
    });

    Route::get('/re-add-agent', function () {
        return view('dashboard.re-add-agent');
    });

    Route::get('/re-customers', function () {
        return view('dashboard.re-customers');
    });

    Route::get('/wallet', function () {
        return view('dashboard.wallet');
    });

    Route::get('/transactions', function () {
        return view('dashboard.transactions');
    });

    Route::get('/patients-list', function () {
        return view('dashboard.patients-list');
    });

    Route::get('/add-patient', function () {
        return view('dashboard.add-patient');
    });

    Route::get('/patient-details', function () {
        return view('dashboard.patient-details');
    });

    Route::get('/appointments', function () {
        return view('dashboard.appointments');
    });

    Route::get('/prescriptions', function () {
        return view('dashboard.prescriptions');
    });

    Route::get('/write-prescription', function () {
        return view('dashboard.write-prescription');
    });

    Route::get('/menus', function () {
        return view('dashboard.menus');
    });

    Route::get('/dish-details', function () {
        return view('dashboard.dish-details');
    });

    Route::get('/rooms-list', function () {
        return view('dashboard.rooms-list');
    });

    Route::get('/room-details', function () {
        return view('dashboard.room-details');
    });

    Route::get('/guests-list', function () {
        return view('dashboard.guests-list');
    });

    Route::get('/rea-properties', function () {
        return view('dashboard.rea-properties');
    });

    Route::get('/rea-property-details', function () {
        return view('dashboard.rea-property-details');
    });

    Route::get('/ct-transactions', function () {
        return view('dashboard.ct-transactions');
    });

    Route::get('/ct-gainers-losers', function () {
        return view('dashboard.ct-gainers-losers');
    });

    Route::get('/ct-wallet', function () {
        return view('dashboard.ct-wallet');
    });

    Route::get('/events-grid', function () {
        return view('dashboard.events-grid');
    });

    Route::get('/events-list', function () {
        return view('dashboard.events-list');
    });

    Route::get('/event-details', function () {
        return view('dashboard.event-details');
    });

    Route::get('/create-an-event', function () {
        return view('dashboard.create-an-event');
    });

    Route::get('/edit-an-event', function () {
        return view('dashboard.edit-an-event');
    });

    Route::get('/social-profile', function () {
        return view('dashboard.social-profile');
    });

    Route::get('/social-settings', function () {
        return view('dashboard.social-settings');
    });

    Route::get('/invoices', function () {
        return view('dashboard.invoices');
    });

    Route::get('/invoice-details', function () {
        return view('dashboard.invoice-details');
    });

    Route::get('/create-invoice', function () {
        return view('dashboard.create-invoice');
    });

    Route::get('/edit-invoice', function () {
        return view('dashboard.edit-invoice');
    });

    Route::get('/team-members', function () {
        return view('dashboard.team-members');
    });

    Route::get('/users-list', function () {
        return view('dashboard.users-list');
    });

    Route::get('/add-user', function () {
        return view('dashboard.add-user');
    });

    Route::get('/user-profile', function () {
        return view('dashboard.user-profile');
    });

    Route::get('/profile-teams', function () {
        return view('dashboard.profile-teams');
    });

    Route::get('/profile-projects', function () {
        return view('dashboard.profile-projects');
    });

    Route::get('/starter', function () {
        return view('dashboard.starter');
    });

    Route::get('/material-symbols', function () {
        return view('dashboard.material-symbols');
    });

    Route::get('/remixicon', function () {
        return view('dashboard.remixicon');
    });

    Route::get('/alerts', function () {
        return view('dashboard.alerts');
    });

    Route::get('/avatars', function () {
        return view('dashboard.avatars');
    });

    Route::get('/accordion', function () {
        return view('dashboard.accordion');
    });

    Route::get('/badges', function () {
        return view('dashboard.badges');
    });

    Route::get('/buttons', function () {
        return view('dashboard.buttons');
    });

    Route::get('/breadcrumb', function () {
        return view('dashboard.breadcrumb');
    });

    Route::get('/clipboard', function () {
        return view('dashboard.clipboard');
    });

    Route::get('/dropdowns', function () {
        return view('dashboard.dropdowns');
    });

    Route::get('/images', function () {
        return view('dashboard.images');
    });

    Route::get('/modal', function () {
        return view('dashboard.modal');
    });

    Route::get('/pagination', function () {
        return view('dashboard.pagination');
    });

    Route::get('/popover', function () {
        return view('dashboard.popover');
    });

    Route::get('/progress', function () {
        return view('dashboard.progress');
    });

    Route::get('/tooltips', function () {
        return view('dashboard.tooltips');
    });

    Route::get('/tabs', function () {
        return view('dashboard.tabs');
    });

    Route::get('/typography', function () {
        return view('dashboard.typography');
    });

    Route::get('/videos', function () {
        return view('dashboard.videos');
    });

    Route::get('/tables', function () {
        return view('dashboard.tables');
    });

    Route::get('/input-select', function () {
        return view('dashboard.input-select');
    });

    Route::get('/checkboxes-radios', function () {
        return view('dashboard.checkboxes-radios');
    });

    Route::get('/rich-text-editor', function () {
        return view('dashboard.rich-text-editor');
    });

    Route::get('/file-uploader', function () {
        return view('dashboard.file-uploader');
    });

    Route::get('/line-charts', function () {
        return view('dashboard.line-charts');
    });

    Route::get('/area-charts', function () {
        return view('dashboard.area-charts');
    });

    Route::get('/column-charts', function () {
        return view('dashboard.column-charts');
    });

    Route::get('/mixed-charts', function () {
        return view('dashboard.mixed-charts');
    });

    Route::get('/radialbar-charts', function () {
        return view('dashboard.radialbar-charts');
    });

    Route::get('/radar-charts', function () {
        return view('dashboard.radar-charts');
    });

    Route::get('/pie-charts', function () {
        return view('dashboard.pie-charts');
    });

    Route::get('/polar-charts', function () {
        return view('dashboard.polar-charts');
    });

    Route::get('/more-charts', function () {
        return view('dashboard.more-charts');
    });

    Route::get('/pricing', function () {
        return view('dashboard.pricing');
    });

    Route::get('/timeline', function () {
        return view('dashboard.timeline');
    });

    Route::get('/faq', function () {
        return view('dashboard.faq');
    });

    Route::get('/gallery', function () {
        return view('dashboard.gallery');
    });

    Route::get('/testimonials', function () {
        return view('dashboard.testimonials');
    });

    Route::get('/search', function () {
        return view('dashboard.search');
    });

    Route::get('/coming-soon', function () {
        return view('dashboard.coming-soon');
    });

    Route::get('/blank-page', function () {
        return view('dashboard.blank-page');
    });

    Route::get('/not-found', function () {
        return view('dashboard.not-found');
    });

    Route::get('/internal-error', function () {
        return view('dashboard.internal-error');
    });

    Route::get('/widgets', function () {
        return view('dashboard.widgets');
    });

    Route::get('/maps', function () {
        return view('dashboard.maps');
    });

    Route::get('/notifications', function () {
        return view('dashboard.notifications');
    });

    Route::get('/members', function () {
        return view('dashboard.members');
    });

    Route::get('/my-profile', function () {
        return view('dashboard.my-profile');
    });

    Route::get('/settings', function () {
        return view('dashboard.settings');
    });

    Route::get('/change-password', function () {
        return view('dashboard.change-password');
    });

    Route::get('/connections', function () {
        return view('dashboard.connections');
    });

    Route::get('/privacy-policy', function () {
        return view('dashboard.privacy-policy');
    });

    Route::get('/terms-conditions', function () {
        return view('dashboard.terms-conditions');
    });
});