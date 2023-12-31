<div class="max-w-6xl mx-auto">
    <div class="flex justify-end m-2 p-2">
        <x-button wire:click="showPostModal">
            Create
        </x-button>
    </div>
    <div class="m-2 p-2">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
              <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                  <thead class="bg-gray-50 dark:bg-gray-600 dark:text-gray-200">
                    <tr>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Id</th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Title</th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Status</th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Image</th>
                      <th scope="col" class="relative px-6 py-3">Edit</th>
                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y divide-gray-200">
                    <tr></tr>
                    <tr>
                      <td class="px-6 py-4 whitespace-nowrap">id</td>
                      <td class="px-6 py-4 whitespace-nowrap">title</td>
                      <td class="px-6 py-4 whitespace-nowrap">Active</td>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <img class="w-8 h-8 rounded-full" src="https://picsum.photos/200" />
                      </td>
                      <td class="px-6 py-4 text-right text-sm">Edit Delete</td>
                    </tr>
                    <!-- More items... -->
                  </tbody>
                </table>
                <div class="m-2 p-2">Pagination</div>
              </div>
            </div>
          </div>
          
    </div>
    <div>
        <x-dialog-modal wire:model="showingPostModal">
            <x-slot name="title">Title</x-slot>
            <x-slot name="content">
                <div class="space-y-8 divide-y divide-gray-200 mt-10 w-full">
                    <form enctype="multipart/form-data">
                      <div class="sm:col-span-6">
                        <label for="title" class="block text-sm font-medium text-gray-700"> Post Title </label>
                        <div class="mt-1">
                          <input type="text" id="title" wire:model.lazy="title" name="title" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                      </div>
                      <div class="sm:col-span-6">
                        <label for="title" class="block text-sm font-medium text-gray-700"> Post Image </label>
                        <div class="mt-1">
                          <input type="file" id="image" wire:model="newImage" name="image" class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                      </div>
                    
                      <div class="sm:col-span-6 pt-5">
                        <label for="body" class="block text-sm font-medium text-gray-700">Body</label>
                        <div class="mt-1">
                          <textarea id="body" rows="3" wire:model.lazy="body" class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm"></textarea>
                        </div>
                      </div>
                    </form>
                  </div>                  
            </x-slot>
            <x-slot name="footer">
                <x-button wire:click="storePost">Store</x-button>
            </x-slot>
        </x-dialog-modal>
    </div>
</div>
