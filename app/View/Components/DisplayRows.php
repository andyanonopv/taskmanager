<?php 

namespace App\View\Components\Table;

use Illuminate\View\Component;
use Illuminate\View\View;

class DisplayRows extends Component
{
    public $rowsPerPage;

    public function __construct($rowsPerPage = 10)
    {
        $this->rowsPerPage = $rowsPerPage;
    }

    public function render() : View
    {
        return view('components.table.display-rows');
    }
}
