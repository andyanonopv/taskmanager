<?php 

namespace App\View\Components\Table;

use Illuminate\View\Component;
use Illuminate\View\View;

class Table extends Component
{
    public function render() : View
    {
        return view('components.table.table');
    }
}
