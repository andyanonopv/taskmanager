<?php 

namespace App\View\Components\Table;

use Illuminate\View\Component;
use Illuminate\View\View;

class DisplayRows extends Component
{
    public function render() : View
    {
        return view('components.table.display-rows');
    }
}
