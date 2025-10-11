| **Feature**          | **StatelessWidget**                                                         | **StatefulWidget**                                                                    |
| -------------------- | --------------------------------------------------------------------------- | ------------------------------------------------------------------------------------- |
| **Definition**       | A widget that **does not change** once it’s built.                          | A widget that can **change its state** during runtime.                                |
| **Immutability**     | **Immutable** — all properties are final; cannot be updated after creation. | **Mutable** — uses a separate `State` object that can be modified using `setState()`. |
| **Rebuild Behavior** | Rebuilt only when **external data** (like parent widget updates) changes.   | Rebuilt when **internal state** changes (like user interaction, API call, etc.).      |
| **Performance**      | Faster and lightweight because it doesn’t manage state.                     | Slightly heavier as it maintains and updates internal state.                          |
