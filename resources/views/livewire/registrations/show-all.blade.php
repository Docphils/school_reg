<div class="p-6 text-white">
    {{-- List of registrations --}}
    @if (isset($registrations))
        <div class="text-start">
            <div class="mb-3 border-b flex justify-between font-semibold text-cyan-300">
                <span class="mr-5">#</span>
                <span class="w-full">Learners Name</span>
                <span class="w-full">Parents Name</span>
                <span class="w-full">Contact Email</span>
                <span class="w-full">Actions</span>
            </div> 
            @foreach ($registrations as $registration)
            <div class="text-md" wire:key="{{ $registration->id }}">
                <div class="mb-3 border-b flex justify-between">
                    <span class="mr-5">{{ $loop->iteration }}</span>
                    <span class="w-full">{{ strtoupper($registration->learner_surname) }}, {{ $registration->learner_names }}</span>
                    <span class="w-full">{{ strtoupper($registration->surname) }}, {{ $registration->othernames}}</span>
                    <span class="w-full">{{ $registration->email }}</span>
                    <a class="w-full text-cyan-200 hover:text-cyan-50 hover:underline" href="#" wire:click="show({{ $registration->id }})"> View</a>                
                </div> 
            </div>
            @endforeach
        </div>
    @endif    
    @if ($registrationId)
    <div x-data="{ showModal: true }" class="relative">
        <!-- Modal Background -->
        <div x-show="showModal" x-transition.opacity.duration.300ms
             class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
            <!-- Modal Box -->
            <div  class="bg-white rounded-lg shadow-xl p-6 w-full w-1/2">
                <!-- Modal Header -->
                <div class="flex justify-between items-center border-b pb-2">
                    <h2 class="text-xl text-cyan-900 font-semibold">{{$details->learner_surname }}, {{$details->learner_names }} registration details</h2>
                    <button @click="showModal = false" wire:click="resetModal" class="text-red-600 hover:text-red-900 text-xl font-bold">
                        &times;
                    </button>
                </div>
    
                <!-- Modal Content -->
                <div class="flex mt-4 text-gray-700 justify-between">
                    <div class="w-full mb-2 border-r border-b">
                        <p class="border-b p-2">Parent's Surname:</p>
                        <p class="border-b p-2">Parent's Other Names:</p>
                        <p class="border-b p-2">Parent's Email:</p>
                        <p class="border-b  p-2">Parent's Phone Number:</p>
                        <p class="border-b  p-2">Residential Address:</p>
                        <p class="border-b p-2">Learner's Surname:</p>
                        <p class="border-b p-2">Learner's Other Names:</p>
                        <p class="border-b p-2">Learner's Date of Birth:</p>
                        <p class="border-b p-2">Recently Concluded Class:</p>
                        <p class=" p-2">Additional Remarks:</p>
                    </div>

                    <div class="w-full mb-2 border-b">
                        <p class="border-b p-2">{{$details->othernames}}</p>
                        <p class="border-b p-2">{{$details->surname}}</p>
                        <p class="border-b p-2">{{$details->email}}</p>
                        <p class="border-b p-2">{{$details->phone}}</p>
                        <p class="border-b p-2">{{$details->address}}</p>
                        <p class="border-b p-2">{{$details->learner_surname}}</p>
                        <p class="border-b p-2">{{$details->learner_names}}</p>
                        <p class="border-b p-2">{{$details->dob}}</p>
                        <p class="border-b p-2">{{$details->previous_class}}</p>
                        <p class=" p-2">{{$details->remarks}}</p>
                    </div>
                </div>
    
                <!-- Modal Footer -->
                <div class="flex justify-end mt-4">
                    <button @click="showModal = false" wire:click="edit({{ $registration->id }})" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400">
                        Edit
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    
    @endif
</div>
