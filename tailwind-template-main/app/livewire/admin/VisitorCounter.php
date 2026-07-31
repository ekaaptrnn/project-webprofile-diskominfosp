<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\VisitorLog;
use Carbon\Carbon;

class VisitorCounter extends Component
{
    public function render()
    {
        $today = Carbon::today()->toDateString();
        $yesterday = Carbon::yesterday()->toDateString();
        $currentMonth = Carbon::now()->month;
        $currentYear = Carbon::now()->year;

        return view('livewire.visitor-counter', [
            'hariIni'  => VisitorLog::where('visit_date', $today)->count(),
            'kemarin'  => VisitorLog::where('visit_date', $yesterday)->count(),
            'bulanIni' => VisitorLog::whereYear('visit_date', $currentYear)
                                    ->whereMonth('visit_date', $currentMonth)
                                    ->count(),
            'total'    => VisitorLog::count(),
        ]);
    }
}
