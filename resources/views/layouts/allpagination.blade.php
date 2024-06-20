
<div class="row mt-5">
                      <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" id="dataTableExample_info" role="status" aria-live="polite">
                          Showing {{ $data->firstItem() }} to {{ $data->lastItem() }} of {{ $data->total() }} entries
                        </div>
                      </div>
                      <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers right" id="dataTableExample_paginate">
                          <ul class="pagination">
                            <li class="paginate_button page-item previous {{ $data->previousPageUrl() ? '' : 'disabled' }}" id="dataTableExample_previous">
                              <a href="{{ $data->previousPageUrl() ?? '#' }}" aria-controls="dataTableExample" tabindex="0" class="page-link">Previous</a>
                            </li>
                            @foreach ($data->getUrlRange(1, $data->lastPage()) as $page => $url)
                            <li class="paginate_button page-item {{ $page == $data->currentPage() ? 'active' : '' }}">
                              <a href="{{ $url }}" aria-controls="dataTableExample" tabindex="0" class="page-link">{{ $page }}</a>
                            </li>
                            @endforeach
                            <li class="paginate_button page-item next {{ $data->nextPageUrl() ? '' : 'disabled' }}" id="dataTableExample_next">
                              <a href="{{ $data->nextPageUrl() ?? '#' }}" aria-controls="dataTableExample" tabindex="0" class="page-link">Next</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>