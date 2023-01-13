@extends('../layout/' . $layout)

@section('subhead')
<title>MESSAGE_TEMPLETE</title>
@endsection

@section('subcontent')

 <!-- BEGIN: Responsive Table -->
 <div class="intro-y box mt-5">
    <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60">
        <h2 class="font-medium text-base mr-auto">Responsive Table</h2>
        <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
            <label class="form-check-label ml-0" for="show-example-6">Show example code</label>
            <input id="show-example-6" data-target="#responsive-table" class="show-code form-check-input mr-0 ml-3" type="checkbox">
        </div>
    </div>
    <div class="p-5" id="responsive-table">
        <div class="preview">
            <div class="overflow-x-auto">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="whitespace-nowrap">#</th>
                            <th class="whitespace-nowrap">First Name</th>
                            <th class="whitespace-nowrap">Last Name</th>
                            <th class="whitespace-nowrap">Username</th>
                            <th class="whitespace-nowrap">Email</th>
                            <th class="whitespace-nowrap">Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="whitespace-nowrap">1</td>
                            <td class="whitespace-nowrap">Angelina</td>
                            <td class="whitespace-nowrap">Jolie</td>
                            <td class="whitespace-nowrap">@angelinajolie</td>
                            <td class="whitespace-nowrap">angelinajolie@gmail.com</td>
                            <td class="whitespace-nowrap">
                                260 W. Storm Street New York, NY 10025.
                            </td>
                        </tr>
                        <tr>
                            <td class="whitespace-nowrap">2</td>
                            <td class="whitespace-nowrap">Brad</td>
                            <td class="whitespace-nowrap">Pitt</td>
                            <td class="whitespace-nowrap">@bradpitt</td>
                            <td class="whitespace-nowrap">bradpitt@gmail.com</td>
                            <td class="whitespace-nowrap">
                                47 Division St. Buffalo, NY 14241.
                            </td>
                        </tr>
                        <tr>
                            <td class="whitespace-nowrap">3</td>
                            <td class="whitespace-nowrap">Charlie</td>
                            <td class="whitespace-nowrap">Hunnam</td>
                            <td class="whitespace-nowrap">@charliehunnam</td>
                            <td class="whitespace-nowrap">charliehunnam@gmail.com</td>
                            <td class="whitespace-nowrap">
                                8023 Amerige Street Harriman, NY 10926.
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="source-code hidden">
            <button data-target="#copy-responsive-table" class="copy-code btn py-1 px-2 btn-outline-secondary">
                <i data-lucide="file" class="w-6 h-6 mr-2"></i> Copy example code
            </button>
            <div class="overflow-y-auto mt-3 rounded-md">
                <pre class="source-preview" id="copy-responsive-table">
                    <code class="html">
                        {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                            <div class="overflow-x-auto">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="whitespace-nowrap">#</th>
                                            <th class="whitespace-nowrap">First Name</th>
                                            <th class="whitespace-nowrap">Last Name</th>
                                            <th class="whitespace-nowrap">Username</th>
                                            <th class="whitespace-nowrap">Email</th>
                                            <th class="whitespace-nowrap">Address</th>
                                            <th class="whitespace-nowrap">name</th>
                                            <th class="whitespace-nowrap">Emil</th>
                                            <th class="whitespace-nowrap">Addres</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="whitespace-nowrap">1</td>
                                            <td class="whitespace-nowrap">Angelina</td>
                                            <td class="whitespace-nowrap">Jolie</td>
                                            <td class="whitespace-nowrap">@angelinajolie</td>
                                            <td class="whitespace-nowrap">angelinajolie@gmail.com</td>
                                            <td class="whitespace-nowrap">
                                                260 W. Storm Street New York, NY 10025.
                                            </td>
                                            <td class="whitespace-nowrap">angelinajolie@gmail.com</td>
                                            <td class="whitespace-nowrap">
                                                260 W. Storm Street New York, NY 10025.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="whitespace-nowrap">2</td>
                                            <td class="whitespace-nowrap">Brad</td>
                                            <td class="whitespace-nowrap">Pitt</td>
                                            <td class="whitespace-nowrap">@bradpitt</td>
                                            <td class="whitespace-nowrap">bradpitt@gmail.com</td>
                                            <td class="whitespace-nowrap">
                                                47 Division St. Buffalo, NY 14241.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="whitespace-nowrap">3</td>
                                            <td class="whitespace-nowrap">Charlie</td>
                                            <td class="whitespace-nowrap">Hunnam</td>
                                            <td class="whitespace-nowrap">@charliehunnam</td>
                                            <td class="whitespace-nowrap">charliehunnam@gmail.com</td>
                                            <td class="whitespace-nowrap">
                                                8023 Amerige Street Harriman, NY 10926.
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        ')) }}
                    </code>
                </pre>
            </div>
        </div>
    </div>
</div>
<!-- END: Responsive Table -->

@endsection
