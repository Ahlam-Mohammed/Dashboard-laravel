<?php

namespace App\Http\Livewire\Customer;

use App\Repositories\CustomerRepository;
use App\Services\CustomerService;
use Livewire\Component;
use Livewire\WithFileUploads;

class CustomerSay extends Component
{

    use WithFileUploads;

    public $comment;
    public $imag;
    public $is_active;
    public $customers;
    public $customer_id;

    private $customerService;
    private $customerRepository;

    public function __construct()
    {
        $this->customerRepository = new CustomerRepository();
        $this->customerService    = new CustomerService();
    }

    public function render()
    {
        // sleep(4);
        $this->customers = $this->customerRepository->getAll();
        return view('livewire.customer.customer-say');
    }

    protected $rules =
    [
        'comment' => 'required',
    ];

    public function store()
    {
        // dd($this->imag);
        $this->validate($this->rules);

        $this->customerService  -> setComment($this->comment)
                                -> setIsActive($this->is_active)
                                -> setImag($this->imag);

        $this->customerService -> create();

        $this->resetInput();

        session()->flash('message', 'Created successfully.');
    }

    public function edit($id)
    {
        $record = $this->customerRepository->getCustomerByID($id);

        $this->customer_id = $id;
        $this->comment     = $record->comment;
        $this->imag        = $record->imag;
    }

    public function update()
    {
        $this->validate($this->rules);

        if ($this->customer_id)
        {
            $record = $this->customerRepository -> getCustomerByID($this->customer_id);

            $this->customerService  -> setComment($this->comment)
                                    -> setImag($this->imag);

            $this->customerService -> update($record);

            $this->resetInput();

            session()->flash('message', 'Updated successfully.');
        }
    }

    public function isActive($id)
    {
        $record = $this->customerRepository -> getCustomerByID($id);
        $this->is_active = $record->is_active === false ? true : false;

        $this->customerService  -> setIsActive($this->is_active)
                                -> updateIsActive($record);

        session()->flash('message', 'Active status updated.');
    }

    public function destroy($id)
    {
        if ($id)
        {
            $record = $this->customerRepository->getCustomerByID($id);
            $this->customerService->delete($record);
        }

        session()->flash('message', 'Deleted successfully');
    }


    public function resetInput()
    {
        $this-> comment     = null;
        $this-> customer_id = null;
        $this-> is_active   = null;
        $this-> imag        = null;
    }
}
