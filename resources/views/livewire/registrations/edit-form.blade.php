
<form wire:submit.prevent="update" class="absolute inset-0 bg-cyan-900 text-white w-2/3 mx-auto shadow-lg">
    <fieldset class="border p-6 rounded-md grid">
        <legend class="font-bold text-lg">Edit Registration</legend>
        <div class="sm:flex gap-4 mt-2">
            <div class="grid w-full ">
                <label for="surname">Surname:</label>
                <input wire:model="surname" type="text" name="surname" id="surname" class="text-gray-900 rounded-md" required>
                @error('surname')
                    <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>
            <div class="grid w-full">
                <label for="othernames">Other Names:</label>
                <input wire:model="othernames" type="text" name="othernames" id="othernames" class="text-gray-900 rounded-md" required>
                @error('othernames')
                    <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="sm:flex gap-4 mt-2">
            <div class="grid w-full">
                <label for="email">Contact Email:</label>
                <input wire:model="email" type="email" name="email" id="email" class="text-gray-900 rounded-md"  required>
                @error('email')
                    <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>
            <div class="grid w-full">
                <label for="phone">Phone Number:</label>
                <input wire:model.live="phone" type="tel" name="phone" id="phone" class="text-gray-900 rounded-md" required>
                @error('phone')
                    <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="mt-2">
            <div class="grid w-full">
                <label for="address">Residential Address:</label>
                <input wire:model="address" type="text" name="address" id="address" class="text-gray-900 rounded-md" required>
                @error('address')
                    <span class="text-red-500">{{$message}}</span>
                @enderror
            </div> 
        </div>
        <fieldset class="mt-4 border p-2 rounded-md">
            <legend class="font-bold">Learner's Details</legend>
            <div class="sm:flex gap-4">
                <div class="grid w-full ">
                    <label for="learner_surname">Surname:</label>
                    <input wire:model="learner_surname" type="text" name="learner_surname" id="learner_surname" class="text-gray-900 rounded-md" required>
                    @error('learner_surname')
                    <span class="text-red-500">{{$message}}</span>
                @enderror
                </div>
                <div class="grid w-full">
                    <label for="learner_names">Other Names:</label>
                    <input wire:model="learner_names" type="text" name="learner_names" id="learner_names" class="text-gray-900 rounded-md"  required>
                    @error('learner_names')
                    <span class="text-red-500">{{$message}}</span>
                @enderror
                </div>
            </div>
            <div class="sm:flex gap-4 mt-4">
                <div class="grid w-full ">
                    <label for="dob">Date of Birth:</label>
                    <input wire:model="dob" type="date" name="dob" id="dob" class="text-gray-900 rounded-md" required>
                    @error('dob')
                        <span class="text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <div class="grid w-full ">
                    <label for="previous_class">Previous Class:</label>
                    <select wire:model="previous_class" class="text-gray-900 rounded-md" id="previous_class" name="previous_class" required>
                        <option value="">Select Class</option>
                        <option value="Play Group">Play Group</option>
                        <option value="Pre Nursery">Pre Nursery</option>
                        <option value="Nursery">Nursery</option>
                        <option value="Reception">Reception</option>
                        <option value="Grade 1">Grade 1</option>
                        <option value="Grade 2">Grade 2</option>
                        <option value="Grade 3">Grade 3</option>
                        <option value="Grade 4">Grade 4</option>
                        <option value="Grade 5">Grade 5</option>
                        <option value="Grade 6">Grade 6</option>
                    </select>
                    @error('previous_class')
                        <span class="text-red-500">{{$message}}</span>
                    @enderror
                </div>
            </div>
        </fieldset>
        <div class="mt-2">
            <div class="grid w-full">
                <label for="remarks">Additional Remarks:</label>
                <textarea wire:model="remarks" type="text" name="remarks" id="remarks" class="text-gray-900 rounded-md" ></textarea>
                @error('remarks')
                    <span class="text-red-500">{{$message}}</span>
                @enderror
            </div> 
        </div>
        <div class="flex justify-between mt-6 ">
            <button class="text-gray-400 font-semibold p-2 rounded-md hover:bg-gray-300 hover:underline" wire:click.prevent='resetModal'>Cancel</button>
            <button type="submit" class="text-white font-semibold rounded-md p-2 bg-cyan-900 hover:bg-cyan-700 hover:underline">Submit</button>
        </div>
        <span wire:loading>Submitting...</span> 
       

    </fieldset>
</form>